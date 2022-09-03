<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriProduk::orderBy('kategori','asc')->get();
        $data = DB::table('produks')
        ->join('kategori_produks','produks.kategori_id','kategori_produks.id')
        ->select('kategori_produks.*','produks.*')
        ->orderBy('kategori','asc')->get();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        // return $data;
        return view('admin.produk.index',compact('data','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriProduk::orderBy('kategori','asc')->get();
        return view('admin.produk.tambah',compact('kategori'));
    }
    public function editt($id)
    {
        $kategori = KategoriProduk::orderBy('kategori','asc')->get();
        $data = DB::table('produks')
        ->join('kategori_produks','produks.kategori_id','kategori_produks.id')
        ->select('kategori_produks.*','produks.*')
        ->orderBy('produks.id','desc')->where('produks.id',$id)->first();
        return view('admin.produk.edit',compact('data','kategori','id'));
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
        $req =$request->all();

        
        $tujuan_upload = public_path('admin/produk');
        $file = $request->file('foto1');
        $namaFile = Carbon::now()->format('Ymd') .$file->getClientOriginalName();
        $file->move($tujuan_upload, $namaFile);
        $req['foto_produk'] = $namaFile;

         
        $tujuan_upload2 = public_path('admin/produk');
        $file2 = $request->file('foto2');
        $namaFile2 = Carbon::now()->format('Ymd') .$file2->getClientOriginalName();
        $file2->move($tujuan_upload2, $namaFile2);
        $req['foto_produk2'] = $namaFile2;

        Produk::create($req);

        return redirect('produk')->with('message','Sukses tambah produk');


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
        $req = $request->all();

        if($request->hasFile('foto1')){
            $tujuan_upload = public_path('admin/produk');
            $file = $request->file('foto1');
            $namaFile = Carbon::now()->format('Ymd') .$file->getClientOriginalName();
            $file->move($tujuan_upload, $namaFile);
            $req['foto_produk'] = $namaFile;
      
        }
        if($request->hasFile('foto2')){
        
            $tujuan_upload2 = public_path('admin/produk');
            $file2 = $request->file('foto2');
            $namaFile2 = Carbon::now()->format('Ymd') .$file2->getClientOriginalName();
            $file2->move($tujuan_upload2, $namaFile2);
            $req['foto_produk2'] = $namaFile2;

        }

        Produk::where('id',$id)->update($req);
        return redirect('produk')->with('message','Sukses Update produk');

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
}
