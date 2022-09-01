@extends('user.layouts.user_master')

@section('content')
<section class="pt-1 pb-4" id="count-stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto py-3">
                <div class="row">
                    <div class="col-md-4 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state1" countTo="20">0</span>+</h1>
                            <h5 class="mt-3">Produk Herbal</h5>
                            <p class="text-sm font-weight-normal">Obat Herbal A,Obat Herbal B, Obat Heral C, dll
                            </p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"> <span id="state2" countTo="30">0</span>+
                            </h1>
                            <h5 class="mt-3">Produk Kesehatan</h5>
                            <p class="text-sm font-weight-normal">Produk Kecantikan, Produk B, dll</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                            <h5 class="mt-3">Dokter</h5>
                            <p class="text-sm font-weight-normal">Rekomendasi Kesehatan dan Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="row text-center my-sm-5 mt-1">
                <div class="col-lg-6 mx-auto">
                    <span class="badge bg-primary mb-3">Layanan UBEEKA</span>
                    <h2 class="">Pilih Layanan yang Anda Perlukan</h2>
                    <p class="lead">Kami akan Berusaha Memberikan yang terbaik</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-4">
                    <div class="col-md-6 text-center">
                        <a href="">
                            <div class="card move-on-hover">
                                <div class="text-center">
                                    <img class="w-30" src="{{asset('public/image/icon/shelves.png')}}" alt="aboutus">
                                </div>
                            </div>
                            <div class="mt-2 ms-2">
                                <h6 class="mb-0">Produk Kesehatan</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5 text-center">
                        <a href="">
                            <div class="card move-on-hover">
                                <div class="text-center">
                                    <img class="w-30" src="{{asset('public/image/icon/herbs.png')}}" alt="contactus">
                                </div>
                            </div>
                            <div class="mt-2 ms-2">
                                <h6 class="mb-0">Produk Herbal</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-md-3 mt-6 text-center">
                        <a href="">
                            <div class="card move-on-hover ">
                                <div class="text-center">
                                    <img class="w-30 align-center" src="{{asset('public/image/icon/consultation.png')}}"
                                        alt="">
                                </div>
                            </div>
                            <div class="mt-2 ms-2">
                                <h6 class="mb-0">Konsultasi Dokter</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-md-3 mt-6 text-center">
                        <a href="">
                            <div class="card move-on-hover col-md-12">
                                <div class="text-center">
                                    <img class="w-30" src="{{asset('public/image/logistik.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="mt-2 ms-2">
                                <h6 class="mb-0">Logistik</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3 mx-auto mt-md-0 mt-5">
                        <div class="position-sticky" style="top:100px !important">
                            <h4 class="">Presentation Pages for Company, Sign In Page, Author and Contact</h4>
                            <h6 class="text-secondary font-weight-normal">These is just a small selection of the
                                multiple possibitilies you have. Focus on the business, not on the design.</h6>
                        </div>
                    </div> -->
        </div>
</section>


<div class="container py-6">
    <div class="row">
        <div class="col-lg-6 mx-auto text-center">
            <h2 class="mb-0">Beberapa Produk Unggulan</h2>
            <h2 class="text-gradient text-primary mb-3">120k+ Terjual</h2>
            <p class="lead">Banyak Produk Kesehatan, Produk Herbal, dan produk lainnya </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
            <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-75">
                <img src="{{asset('public/image/icon/products_2.png')}}" class="w-30" alt="">
                <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                    <h5>Produk Kesehatan</h5>
                    <p>Kandungan didalamnya berupa ......</p>
                    <a href="#" class="text-primary icon-move-right">
                        Detail
                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-lg-0 mt-4">
            <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-75">
                <img src="{{asset('public/image/icon/organic-product.png')}}" class="w-30" alt="">
                <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                    <h5>Produk Rokok Herbal</h5>
                    <p>Rokok Herbal yang memiliki kandungan .......</p>
                    <a href="#" class="text-primary icon-move-right">
                        Detail
                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-lg-0 mt-4">
            <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-75">
                <img src="{{asset('public/image/icon/products_1.png')}}" class="w-30" alt="">
                <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                    <h5>Produk Makanan dan Minuman</h5>
                    <p>Produk Makanan Ringan dan Minuman yang Menyegarkan</p>
                    <a href="#" class="text-primary icon-move-right">
                        Detail
                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <a href="#" class="text-primary icon-move-right">
                Lihat Semua Produk
                <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
        </div>
    </div>
</div>
<!-- -------- END Content Presentation Docs ------- -->


<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="mb-0">Beberapa Dokter yang Memberikan Layanan Konsultasi Kesehatan</h2>
                <!-- <h2 class="text-gradient text-primary mb-3">10+ Dokter</h2> -->
                <p class="lead">Memberikan Rekomendasi Obat untuk Keluhan Anda </p>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <img src="{{asset('public/image/icon/consultation.png')}}" class="w-30" alt="">
                            <div class="name">
                                <h6 class="mb-0 font-weight-bolder">Dokter AAA</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Dokter AAA Merupakan Dokter blablabla....</p>
                        <!-- <div class="rating mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <img src="{{asset('public/image/icon/consultation.png')}}" class="w-30" alt="">
                            <div class="name">
                                <h6 class="mb-0 font-weight-bolder">Dokter BBB</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Dokter BBB Merupakan Dokter blablabla....</p>
                        <!-- <div class="rating mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <img src="{{asset('public/image/icon/consultation.png')}}" class="w-30" alt="">
                            <div class="name">
                                <h6 class="mb-0 font-weight-bolder">Dokter CCC</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Dokter CCC Merupakan Dokter blablabla....</p>
                        <!-- <div class="rating mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="text-primary icon-move-right">
                    Lihat Semua Dokter
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
            </div>
        </div>
        <hr class="horizontal dark my-4">
    </div>
</section>

<section class="py-">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="mb-0">Baca Artikel Menarik Tentang Kesehatan</h2>
                <!-- <h2 class="text-gradient text-primary mb-3">10+ Dokter</h2> -->
                <p class="lead"></p>
            </div>
        </div>
        <!-- <div class="col-md-12">
            <a href="#" class="btn btn-danger"><span>Lihat Artikel</span></a>
        </div> -->
        <div class="row mt-6">
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <div class="name">
                                <div class="text-center">
                                    <img src="{{asset('public/image/icon/heartbeat.png')}}" class="w-40" alt="">
                                </div>
                                <h6 class="mb-0 font-weight-bolder">Kesehatan A</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Penyakit A blablabla</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <div class="name">
                                <div class="text-center">
                                    <img src="{{asset('public/image/icon/heartbeat.png')}}" class="w-40" alt="">
                                </div>
                                <h6 class="mb-0 font-weight-bolder">Kesehatan B</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Penyakit B blablabla</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="author">
                            <div class="name">
                                <div class="text-center">
                                    <img src="{{asset('public/image/icon/heartbeat.png')}}" class="w-40" alt="">
                                </div>
                                <h6 class="mb-0 font-weight-bolder">Kesehatan C</h6>
                                <div class="stats">
                                    <!-- <i class="far fa-clock"></i> Aktif 2 menit lalu -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Penyakit C blablabla</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 text-center">
                <a href="#" class="text-primary icon-move-right">
                    Lihat Semua Artikel
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
            </div>
        </div>
        <hr class="horizontal dark my-5">
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12 my-auto">
                <h3 class="text-gradient text-primary mb-0">Apakah Ada Pertanyan</h3>
                <!-- <h3>Want more?</h3> -->
                <p class="pe-md-5 mb-4">
                    Ajukan Pertanyan dengan klik Tombol Bantuan dibawah
                </p>
                <div class="github-buttons">

                    <div class="github-button">
                        <a class="btn btn-danger" href=""><span>Bantuan</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 my-auto">
                <a href="#">
                    <img class="w-100 border-radius-lg shadow-lg"
                        src="{{asset('public/image/logo_ubeka.png')}}"
                        alt="Product Image">
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
