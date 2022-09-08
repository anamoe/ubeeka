@extends('user.layouts.user_master')

@section('content')

<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="owl-carousel header-carousel position-relative col-12 col-md-6">
                <!-- <h3 class="d-inline-block d-sm-none">Produk 1</h3> -->
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img src="{{asset('public/image/icon/bag.png')}}" class="w-75 position-relative"
                        alt="Product Image">
                </div>
                <div class="owl-carousel-item col-sm-12 position-relative" style="background: rgba(6, 3, 21, .5);">
                    <img class="w-75 position-relative" src="{{asset('public/image/icon/bag.png')}}"
                        alt="Product Image">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">Nama Paket</h3>
                <p>
                    Isian
                </p>

                <hr>
                <h5>Deskripsi</h5>
                <p>
                 Deskripsi Lengkap
                </p>


                <div class="bg-gray py-2 px-3 mt-4">
                    <h4 class="mb-0">
                    Harga Paket
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
                    <a href="#" class="btn btn-success rounded-1">
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
