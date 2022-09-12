@extends('user.layouts.user_master')

@section('content')

<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="owl-carousel header-carousel position-relative col-12 col-md-6">
                <!-- <h3 class="d-inline-block d-sm-none">Produk 1</h3> -->
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                <img class="img-fluid" src="{{asset('public/image/logistik1.jpeg')}}" alt="">
                </div>
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                <img class="img-fluid" src="{{asset('public/image/logistik1.jpeg')}}" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$v->paket}}</h3>
                <p><i class="fa fa-check text-success me-3"></i>Dari {{$v->dari}} Ke {{$v->ke}}</p>
                                        <!-- <p><i class="fa fa-check text-success me-3"></i>Muatan/kg : @currency($v->muatan_kg)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Tepung/kg Rp : @currency($v->tepung_kg_rp)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Menir/sak Rp : @currency($v->menir_sak_rp)</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Menir : @currency($v->menir)</p> -->

                <hr>
                <!-- <h5>Deskripsi</h5>
                <p>
                 Deskripsi Lengkap
                </p> -->


                <div class="bg-gray py-2 px-3 mt-4">
                    <h4 class="mb-0">
                    Harga Paket : @currency($v->tarif)
                    </h4>
                    <!-- <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                    </h4> -->
                </div>

                <div class="mt-4">
                    <!-- <div class="btn btn-success btn-md btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Tambah ke Keranjang
                    </div> -->
                  
                    <a href="https://wa.me/6282235434277?text=Halo admin saya mau beli paket logistik {{$v->paket}} Dari {{$v->alamat_asal}} Ke {{$v->alamat_tujuan}} dengan  Harga Paket : @currency($v->tarif) dengan layanan berikut : Muatan : @currency($v->muatan_kg), Tepung/kg Rp : @currency($v->tepung_kg_rp), Menir/sak Rp : @currency($v->menir_sak_rp), Menir : @currency($v->menir)." class="btn btn-success rounded-1">
                        <i class="fab fa-whatsapp fa-lg mr-2"></i>&nbsp;
                        Tanyakan Paket
                    </a>
                </div>
            </div>
        </div> 
    </div>
    <!-- /.card-body -->
</div>
<!-- Modal -->



@endsection
