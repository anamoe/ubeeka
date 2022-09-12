<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\LogistikImport;
use App\Models\Kota;
use App\Models\Logistik;
use App\Models\PemesananLogistik;
use App\Models\PemesananProduk;
use App\Models\Provinsi;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LogistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logistik.index');
    }


    //Data Logistik
    public function index_data_paket_logistik()
    {
        $logistik = Logistik::all();
        return view('admin.logistik.data_paket.index',compact('logistik'));
    }

    public function tambah_paket_logistik()
    {
        $provinsi = Provinsi::all();
        return view('admin.logistik.data_paket.tambah_paket_logistik',compact('provinsi'));
    }

    public function tambah_paket_logistik_post(Request $request)
    {
        Logistik::create($request->all());
        return redirect('data_paket_logistik')->with('message','Berhasil Menambahkan Data Logistik');
    }

    public function kota(Request $request){
       
        //menampilkan tabel desa dengan dari id kecamatan.
        $kota = Kota::where('province_id',$request->id)->get();

 

        //mengembalikan data dalam bentuk json.
        return response()->json($kota);
    
 }


    public function edit_paket_logistik($id)
    {
        $logistik = Logistik::where('id',$id)->first();
        return view('admin.logistik.data_paket.edit_paket_logistik',compact('logistik','id'));
       
    }

    public function update_paket_logistik(Request $request,$id){
        Logistik::where('id',$id)->update([
            'ke'=>$request->ke,
            'dari'=>$request->dari,
            'menir'=>$request->menir,
            'muatan_kg'=>$request->muatan_kg,
            'tarif'=>$request->tarif,
            'tepung_kg_rp'=>$request->tepung_kg_rp,
            'menir_sak_rp'=>$request->menir_sak_rp,
            'paket'=>$request->paket,
            
        ]);
        return redirect('data_paket_logistik')->with('message','Berhasil Mengupdate Data Logistik');

    }


    // Pengiriman Logistik
    public function index_pengiriman_paket_logistik()
    {
        $plogistik = PemesananLogistik::all();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        return view('admin.logistik.pengiriman_paket.index',compact('plogistik'));
    }

    public function tambah_pengiriman_paket_logistik()
    {
        $logistik = Logistik::all();
        return view('admin.logistik.pengiriman_paket.tambah_pengiriman_logistik',compact('logistik'));
    }

    public function getpaket(){
        $logistik = Logistik::all();

        return $logistik;

    }

    public function tambah_pengiriman_paket_logistik_post(Request $request){

        $req = $request->all();

     
        
        $tujuan_upload = public_path('admin/bukti_ktp_pemesan_logistik');
        $file = $request->file('ktp');
        $namaFile = Carbon::now()->format('Ymd').'_KTP-PEMESAN';
        $file->move($tujuan_upload, $namaFile);
        $req['foto_ktp'] = $namaFile;

        $req['total'] =$request->total_muat+$request->total_rp_tepung+$request->total_menir+$request->total_rp_menir;
        // return $req;

        PemesananLogistik::create($req);

        return redirect('pengiriman_paket_logistik')->with('message','Berhasil Menambahkan  Data Tansaksi Logistik');

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fileImport(Request $request) 
    {
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
        
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('public/admin/file-excel-logistik',$nama_file);
 
		// import data
		Excel::import(new LogistikImport, public_path('admin/file-excel-logistik/'.$nama_file));
 
		// notifikasi dengan session
	
 
		// alihkan halaman kembali
		return redirect('/data_paket_logistik')->with('message','ok');
    }


    function importData(Request $request){
        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx'
        ]);
        $the_file = $request->file('file');
        try{
            $spreadsheet = IOFactory::load($the_file->getRealPath());
            $sheet        = $spreadsheet->getActiveSheet();
            $row_limit    = $sheet->getHighestDataRow();
            $column_limit = $sheet->getHighestDataColumn();
            $row_range    = range( 4, 41 );
            $column_range = range( 'F', $column_limit );
            $startcount = 0;
            $data = array();
            foreach ( $row_range as $row ) {
                $data[] = [
                    'dari' =>$sheet->getCell( 'B' . $row )->getValue(),
                    'ke' => $sheet->getCell( 'C' . $row )->getValue(),
                    'tarif' => $sheet->getCell( 'D' . $row )->getValue(),
                    'muatan_kg' => $sheet->getCell( 'E' . $row )->getValue(),
                    'menir' => $sheet->getCell( 'F' . $row )->getValue(),
                    'tepung_kg_rp' =>$sheet->getCell( 'G' . $row )->getValue(),
                    'menir_sak_rp' =>$sheet->getCell( 'H' . $row )->getValue(),
                    'paket' =>$sheet->getCell( 'D'.'2')->getValue(),
                ];
                $startcount++;
            }

            return $data;
            DB::table('logistiks')->insert($data);
        } catch (Exception $e) {
            $error_code = $e->errorInfo[1];
            return back()->withErrors('There was a problem uploading the data!');
        }
        return back()->withSuccess('Great! Data has been successfully uploaded.');
    }
 
}
