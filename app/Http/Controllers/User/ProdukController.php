<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PemesananProduk;
use App\Models\Produk;
use App\Models\TransaksiProduk;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function detail_produk($id)
    {
     
        $data = DB::table('produks')
        ->join('kategori_produks','produks.kategori_id','kategori_produks.id')
        ->select('kategori_produks.*','produks.*')
        ->orderBy('kategori','asc')->where('produks.id',$id)->first();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        return view('user.produk.detail_produk',compact('data','id'));
    }

    public function user_buat_pesanan(Request $request)
    {



        // return $request;

        $transaksi = TransaksiProduk::create([
            'kode_transaksi'=>Str::random(10),
            'total'=>$request->harga_total,
            'status_pembayaran'=>'dipesan'
        ]);




        PemesananProduk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga_satuan,
            'jumlah'=>$request->jumlah,
            'transaksi_id'=>$transaksi->id,
            'produk_id'=>$request->produk_id
        ]);

        return redirect('user_pemesanan/'.$transaksi->kode_transaksi)->with('message','Pembayaran Berhasil');

        
    
    }

    public function user_pilih_metode_bayar($kode_transaksi){

        $user = User::where('id',3)->first();

        $transaksi = TransaksiProduk::where('kode_transaksi',$kode_transaksi)->first();
        $produk = PemesananProduk::where('transaksi_id',$transaksi->id)->first();
        $fproduk = Produk::where('id',$produk->produk_id)->first();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        
        return view('user.produk.buat_pesanan',compact('transaksi','user','produk','kode_transaksi','fproduk'));


    }

    public function user_post_metode_bayar($kode_transaksi,Request $request){



       TransaksiProduk::where('kode_transaksi',$kode_transaksi)->update([

            'metode_pembayaran'=>$request->metode_bayar,
            'alamat' =>$request->alamat,
            'nama_penerima'=>$request->nama_penerima,
            'no_hp'=>$request->no_hp

        ]);

        return redirect('user_riwayat_pesanan/'.$kode_transaksi)->with('message','Pembayaran Berhasil, Silahkan Melakukan Bukti Pembayaran');

        
    }



    public function user_riwayat_pesanan($kode_transaksi)
    {
        $transaksi = TransaksiProduk::where('kode_transaksi',$kode_transaksi)->first();
        $produk = PemesananProduk::where('transaksi_id',$transaksi->id)->first();
        $fproduk = Produk::where('id',$produk->produk_id)->first();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });

        return view('user.produk.riwayat_pesanan',compact('transaksi','produk','kode_transaksi','fproduk'));
    }

    public function upload_bukti_pembayaran($kode_transaksi,Request $request){
        // return $request;
        $tujuan_upload = public_path('user/bukti_transaksi');
        $file = $request->file('bukti_transaksi');
        $namaFile = 'TF-'.Carbon::now()->format('Y-m-d') . $file->getClientOriginalName();
        $file->move($tujuan_upload, $namaFile);

        TransaksiProduk::where('kode_transaksi',$kode_transaksi)->update([

            'status_pembayaran'=>'Dibayar',
            'bukti_transaksi' =>$namaFile,
         

        ]);

        return 'Berhasil Upload';
 

    }

  
    public function user_keranjang()
    {
        return view('user.produk.keranjang');
    }


    
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
}
