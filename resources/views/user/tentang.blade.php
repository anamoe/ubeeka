@extends('user.layouts.user_master')


@section('content')
<style>
    .page-header {
    background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url(public/image/logistik2.jpeg) center center no-repeat;
    background-size: cover;
}
</style>
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol> -->
        </nav>
    </div>
</div>
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-120"
                        src="{{asset('public/image/ubeeka_group.jpeg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-danger text-uppercase mb-3">Tentang Kami</h6>
                <h1 class="mb-5">Produk Herbal, Konsultasi Kesehatan & Logistik</h1>
                <p class="mb-5">Penjelasan Lengkap</p>
                <div class="row g-4 mb-5">
                    <!-- <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Global Coverage</h5>
                        <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                    </div> -->
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h5>Diantar Tepat Waktu</h5>
                        <p class="m-0">Penjelasan</p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary py-3 px-5">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-xxl py-5 mt-4">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-danger text-uppercase mb-3">Layanan</h6>
                <h1 class="mb-5">Pilih Layanan Sesuai Kebutuhan Anda</h1>
                <p class="mb-5">Keterangan</p>
                <!-- <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Call for any query!</h6>
                        <h3 class="text-primary m-0">+012 345 6789</h3>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6">
                        <a href="#">
                            <div class="bg-warning p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-user-md fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">4</h2>
                                <p class="text-white mb-0">Dokter</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-shopping-bag fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                                <p class="text-white mb-0">Produk</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#">
                            <div class="bg-success p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-leaf fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                                <p class="text-white mb-0">Herbal</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="bg-primary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-truck fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                                <p class="text-white mb-0">Logistik</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Feature Start -->
<!-- <div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">We Are Trusted Logistics Company Since 1990</h1>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo
                            justo magna erat amet</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>On Time Delivery</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo
                            justo magna erat amet</p>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>24/7 Telephone Support</h5>
                        <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo
                            justo magna erat amet</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Feature End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">Tim Kami</h6>
            <h1 class="mb-5">Anggota Tim</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
