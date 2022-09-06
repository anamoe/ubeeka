@extends('admin.layouts.admin_master')

@section('title')
Logistik
@endsection

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Data Pemesan</h5>
                                <span>Nama Pemesan :</span><br>
                                <span>Nomor Telepon/HP :</span><br>
                                <span>Alamat :</span>
                            </div>
                            <div class="col-md-6">
                                <div calss="row">
                                    <div class="col-md-2">
                                        <img src="{{asset('public/image/icon/organic-product.png')}}" width="75" alt=""
                                            srcset="">
                                    </div>
                                    <div class="col-md-10">
                                        <span>Produk 1</span><br>
                                        <span>Kandungan</span><br>
                                        <span>Jumlah :</span><br>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{asset('public/image/icon/organic-product.png')}}" width="75" alt=""
                                            srcset="">
                                    </div>
                                    <div class="col-md-10">
                                        <span>Produk 1</span><br>
                                        <span>Kandungan</span><br>
                                        <span>Jumlah :</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                            <div class="col-md-12 mt-2 text-left ">
                                <span>Petugas Pengirim : ...</span><br>
                                <span>Kendaraan Pengirim : ...</span>
                            </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 mt-2 text-left ">
                                <!-- Total Harga : 1.000.000 <br> -->
                                Status Pengiriman : <span class="badge badge-warning">Sedang Dikirim</span>
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
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



    @endsection
