@extends('user.layouts.user_master')

@section('content')
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('public/image/produk_herbal1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Logistik
                                </h5> -->
                            <h1 class="display-3 text-white animated slideInDown mb-4"><span class="text-primary">Produk
                                    dan Kesehatan</span></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Menyediakan Produk Herbal dan Konsultasi
                                Kesehatan</p>

                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('public/landing_page/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Produk & Kesehatan
                                Solution</h5> -->
                            <h1 class="display-3 text-white animated slideInDown mb-4"> <span
                                    class="text-primary">Logistik</span></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Mengantar Barang Sampai Depan Rumah</p>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
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


<!-- Service Start -->
<div class="container-xxl py-3">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-danger text-uppercase">Produk</h6>
            <h1 class="mb-5">Beberapa Produk Unggulan</h1>
        </div>
       
        <div class="row g-4">

        @foreach($data as $v)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 text-center">
                        <img class="img-fluid w-50" src="{{asset('public/admin/produk/'.$v->foto_produk)}}" alt="">
                    </div>
                    <h4 class="mb-3">{{$v->nama_produk}}</h4>
                    <p>{{$v->kandungan}}</p>
                    <p>@currency($v->harga)</p>
                    <a class="btn-slide mt-2" href="{{route('user_detail_produk',$v->id)}}"><i class="fa fa-arrow-right"></i><span>Detail</span></a>
                </div>
            </div>

            @endforeach
            <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 text-center">
                        <img class="img-fluid w-50" src="{{asset('public/admin/produk'.$v->foto_produk)}}" alt="">
                    </div>
                    <h4 class="mb-3">Produk 2</h4>
                    <p>Penjelasan</p>
                    <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Detail</span></a>
                </div>
            </div> -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.7s">
            <a class="btn btn-primary" href="#">Lihat Produk Lainnya</a>
        </div>
        </div>
    </div>
</div>
<!-- Service End -->


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


<!-- Pricing Start -->
<!-- <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Pricing Plan</h6>
            <h1 class="mb-5">Perfect Pricing Plan</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Basic Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                        <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                        <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                        <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                        <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order Now</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Standard Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                        <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                        <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                        <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                        <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order Now</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Advanced Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                        <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                        <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                        <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                        <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Pricing End -->





<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-danger text-uppercase">Dokter</h6>
            <h1 class="mb-5">Dokter Spesialis untuk Konsultasi Masalah Anda</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('public/image/icon/consultation.png')}}" alt="">
                    </div>
                    <h5 class="mb-0">Dokter A</h5>
                    <p>Dokter Spesialis A</p>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('public/image/icon/consultation.png')}}" alt="">
                    </div>
                    <h5 class="mb-0">Dokter A</h5>
                    <p>Dokter Spesialis A</p>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('public/image/icon/consultation.png')}}" alt="">
                    </div>
                    <h5 class="mb-0">Dokter A</h5>
                    <p>Dokter Spesialis A</p>
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
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('public/image/icon/consultation.png')}}" alt="">
                    </div>
                    <h5 class="mb-0">Dokter A</h5>
                    <p>Dokter Spesialis A</p>
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


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-danger text-uppercase">Testimoni</h6>
            <h1 class="mb-0">Pernyataan dari beberapa Pelanggan</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('public/image/dokter.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Pelanggan 1</h5>
                        <p class="m-0">Pekerjaan A</p>
                    </div>
                </div>
                <p class="mb-0">Dokter memberikan masukan yang baik</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('public/image/dokter.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Pelanggan 3</h5>
                        <p class="m-0">Pekerjaan C</p>
                    </div>
                </div>
                <p class="mb-0">Dokter memberikan masukan yang baik</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('public/image/dokter.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Pelanggan 2</h5>
                        <p class="m-0">Pekerjaan B</p>
                    </div>
                </div>
                <p class="mb-0">Dokter memberikan masukan yang baik</p>
            </div>
            
        </div>
    </div>
</div>
<!-- Quote Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Pertanyaan</h6>
                <h1 class="mb-5">Apakah Ada Pertanyaan ?</h1>
                <p class="mb-5">Tanyakan sesuatu kepada kami bila anda menemukan keraguan</p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-phone fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Telepon untuk Pertanyaan</h6>
                        <h3 class="text-primary m-0">+62 8223 543 4277</h3>
                    </div>
                </div>
                <!-- <br>
                    <div>
                        <span>atau</span>
                    </div>
                <br>
                <div class="d-flex align-items-center">
                    <i class="fa fa-phone fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Telepon untuk Pertanyaan</h6>
                        <h3 class="text-primary m-0">+62 8223 543 4277</h3>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-7">
                <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Nama Lengkap"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Nomor Telepon"
                                    style="height: 55px;">
                            </div>
                            <!-- <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Freight</option>
                                    <option value="1">Freight 1</option>
                                    <option value="2">Freight 2</option>
                                    <option value="3">Freight 3</option>
                                </select>
                            </div> -->
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Pertanyaan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<script>
        $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    </script>

@endsection
