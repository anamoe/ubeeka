@extends('admin.layouts.admin_master')

@section('title')
Pengiriman Paket Logistik
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="{{route('tambah_pengiriman_paket_logistik')}}" class="btn rounded btn-primary"><span
                                class="fa fa-plus"></span>
                            Tambah Pengiriman Paket</a>
                    </div>
                </div>
                @foreach($plogistik as $v)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <h5>Data Pemesan</h5>
                                <span>Nama Pemesan : {{$v->pemesan}}</span><br>
                                <!-- <span>Nomor Telepon/HP :</span><br>
                                <span>Alamat :</span> -->
                                <span>Bukti KTP Pemesan</span><br>
                               
                                        <img src="{{asset('public/admin/bukti_ktp_pemesan_logistik/'.$v->foto_ktp)}}" width="150" alt=""
                                            srcset="">
                                    
                            </div>
                            <div class="col-md-7">
                                <div calss="row">
                                    <div class="col-md-6">
                                    <span>Tepung Kg/rp :</span><br>
                                        <span>Jumlah : {{$v->jml_rp_tepung}}</span><br>
                                        <span>Total Harga : @currency($v->total_rp_tepung)</span><br>
                                    </div>
                                    <div class="col-md-6">
                                        <span>Produk Menir</span><br>
                                        <span>Jumlah : {{$v->jml_menirs}}</span><br>
                                        <span>Total Harga :@currency($v->total_menir)</span><br>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <span>Menir Sak/Kg</span><br>
                                        <span>Jumlah : {{$v->jml_rp_menir}}</span><br>
                                        <span>Total Harga : @currency($v->total_rp_menir)</span><br>
                                    </div>
                                    <div class="col-md-6">
                                    <span>Muatan</span><br>
                                        <span>Jumlah : {{$v->jml_muat}}</span><br>
                                        <span>Total Harga : @currency($v->total_muat)</span><br>
                                        
                                    </div>

                                  
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12 mt-2 text-left ">
                            <!-- <span>Petugas Pengirim : ...</span><br>
                            <span>Kendaraan Pengirim : ...</span> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 mt-2 text-left ">
                                Total Harga :  @currency($v->total)<br>
                                <!-- Status Pengiriman : <span class="badge badge-warning">Sedang Dikirim</span> -->
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <form action="" method="post">
                                <!-- <a class="btn rounded btn-primary" href="{{route('invoice_produk')}}">Terima</a> -->
                                <!-- <button type="submit" class="btn rounded btn-primary" >Terima</button> -->
                                <!-- <button type="submit" class="btn btn-success" >Kirim</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



    @endsection
