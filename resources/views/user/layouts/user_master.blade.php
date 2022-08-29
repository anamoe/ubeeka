<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>

        UBEEKA

    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="{{asset('public/landing_page/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('public/landing_page/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="{{asset('public/landing_page/assets/css/material-kit.css?v=3.0.4')}}" rel="stylesheet" />
</head>

<body class="index-page bg-gray-200">


    <!-- Navbar -->
    @include('user.layouts.user_nav')

    <header class="header-2 text-center">
        <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <span class="mask bg-gradient-dark opacity-3"></span>
                        <img src="{{asset('public/image/produk_herbal2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <span class="mask bg-gradient-dark opacity-3"></span>
                        <img src="{{asset('public/image/produk_herbal1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <span class="mask bg-gradient-dark opacity-3"></span>
                        <img src="{{asset('public/image/produk_herbal1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div> -->

        <div id="carouselExampleIndicators" class="page-header relative  mx-3 mx-md-8 mt-7 carousel slide carousel-fade"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-item active">
                <span class="mask bg-gradient-dark opacity-3"></span>
                <img src="{{asset('public/image/produk_herbal2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <span class="mask bg-gradient-dark opacity-3"></span>
                <img src="{{asset('public/image/produk_herbal1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <span class="mask bg-gradient-dark opacity-3"></span>
                <img src="{{asset('public/image/produk_herbal3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- <div class="page-header min-vh-75 relative " style="background-image: url('public/image/produk_herbal2.jpg')">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="text-white pt-3 mt-n5">Konsultasi Kesehatan, Produk Kesehatan, Produk Herbal</h2>
          <p class="lead text-white mt-3">Dapatkan Rekomendasi Produk Kesehatan dari Dokter</p>
        </div>
      </div>
    </div>
  </div> -->
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-8 mt-3 ">

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
                                            <img class="w-30" src="{{asset('public/image/icon/shelves.png')}}"
                                                alt="aboutus">
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
                                            <img class="w-30" src="{{asset('public/image/icon/herbs.png')}}"
                                                alt="contactus">
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
                                            <img class="w-30 align-center"
                                                src="{{asset('public/image/icon/consultation.png')}}" alt="">
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
                                            <img class="w-30" src="{{asset('public/image/icon/box-car.png')}}" alt="">
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


        <!-- -------- START Content Presentation Docs ------- -->
        <div class="container mt-1">
            <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');"
                loading="lazy">
                <span class="mask bg-gradient-dark"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ms-lg-5">
                            <h4 class="text-white">Built by developers</h4>
                            <h1 class="text-white">Complex Documentation</h1>
                            <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you
                                will find the full documentation. Play with the utility classes and you will create
                                unlimited combinations for our components.</p>
                            <!-- <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                                class="text-white icon-move-right"> -->
                            Read docs
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-white text-3xl">flag</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5 class="text-white">Getting Started</h5>
                            <p class="text-white">Check the possible ways of working with our product and the necessary
                                files for building your own project.</p>
                            <!-- <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit"
                                class="text-white icon-move-right"> -->
                            Let's start
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
                        <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>Plugins</h5>
                            <p>Get inspiration and have an overview about the plugins that we used to create the
                                Material Kit.</p>
                            <!-- <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit"
                                class="text-primary icon-move-right"> -->
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                            <h5>Utility Classes</h5>
                            <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we
                                included many utility classes.</p>
                            <!-- <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit"
                                class="text-primary icon-move-right"> -->
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------- END Content Presentation Docs ------- -->


        <section class="py-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <h2 class="mb-0">Trusted by over</h2>
                        <h2 class="text-gradient text-primary mb-3">1,679,477+ web developers</h2>
                        <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions
                            love Creative Tim's products. </p>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 1 day ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"This is an excellent product, the documentation is excellent and helped
                                    me get things done more efficiently."</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 ms-md-auto">
                        <div class="card bg-gradient-primary">
                            <div class="card-body">
                                <div class="author align-items-center">
                                    <div class="name">
                                        <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                                        <div class="stats text-white">
                                            <i class="far fa-clock"></i> 1 week ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I
                                    use them as a freelancer in my hobby projects for fun! And its really affordable,
                                    very humble guys !!!"</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 3 weeks ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the
                                    components within instead of starting from scratch. I highly recommend for
                                    developers who want to spend more time on the backend!."</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="horizontal dark my-5">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 ms-auto">
                        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
                        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
                        <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-digitalocean.svg"
                            alt="Logo">
                    </div>
                </div>
            </div>
        </section>


        <section class="py-sm-7" id="download-soft-ui">
            <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
                <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines"
                    class="position-absolute start-0 top-md-0 w-100 opacity-2">
                <div class="container py-7 postion-relative z-index-2 position-relative">
                    <div class="row">
                        <div class="col-md-7 mx-auto text-center">
                            <h3 class="text-white mb-0">Do you love this awesome</h3>
                            <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
                            <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below
                                to navigate to Creative Tim where you can find the Design System in HTML. Start a new
                                project or give an old Bootstrap project a new look!</p>
                            <a href="https://www.creative-tim.com/product/material-kit"
                                class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 my-auto">
                        <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
                        <h3>Want more?</h3>
                        <p class="pe-md-5 mb-4">
                            Most complex and innovative Design System Made by <a href="#" target="_blank">Creative Tim
                            </a> . Check our latest Premium Bootstrap 5 UI Kit.

                            Designed for those who like bold elements and beautiful websites. Made of hundred of
                            elements, designed blocks and fully coded pages, Material Kit is ready to help you create
                            stunning websites and webapps.
                        </p>
                        <div class="github-buttons">

                            <div class="github-button">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 my-auto">
                        <a href="">
                            <img class="w-100 border-radius-lg shadow-lg"
                                src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641"
                                alt="Product Image">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <h4 class="mb-1">Thank you for your support!</h4>
                        <p class="lead mb-0">We deliver the best web products</p>
                    </div>
                    <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                        <!-- <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit"
                            class="btn btn-twitter mb-0 me-2" target="_blank"> -->
                        <i class="fab fa-twitter me-1"></i> Tweet
                        </a>
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit"
                            class="btn btn-facebook mb-0 me-2" target="_blank"> -->
                        <i class="fab fa-facebook-square me-1"></i> Share
                        </a>
                        <!-- <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit"
                            class="btn btn-pinterest mb-0 me-2" target="_blank"> -->
                        <i class="fab fa-pinterest me-1"></i> Pin it
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    </div>




    <footer class="footer pt-2 mt-2">
        <div class="card blur shadow-blur mx-3 mx-md-8 mt-3" >
            <div class="container">
                <div class=" row">
                    <div class="col-md-3 mb-4 mt-3 ms-auto">
                        <div>
                            <a href="#">
                            <img src="{{asset('public/image/logo_ubeeka.jpeg')}}" class="mb-2" width="60" height="auto" alt="main_logo">
                        </a>
                            <h6 class="font-weight-bolder mb-4">Ubeeka</h6>
                        </div>
                        <div>
                            <ul class="d-flex flex-row ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim"
                                        target="_blank">
                                        <i class="fab fa-facebook text-lg opacity-8"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                        <i class="fab fa-twitter text-lg opacity-8"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                        <i class="fab fa-dribbble text-lg opacity-8"></i>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://github.com/creativetimofficial"
                                        target="_blank">
                                        <i class="fab fa-github text-lg opacity-8"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link pe-1"
                                        href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                        <i class="fab fa-youtube text-lg opacity-8"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-md-2 mt-3 col-sm-6 col-6 mb-4">
                        <div>
                            <h6 class="text-sm">Company</h6>
                            <ul class="flex-column ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/presentation"
                                        target="_blank">
                                        About Us
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/templates/free"
                                        target="_blank">
                                        Freebies
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/templates/premium"
                                        target="_blank">
                                        Premium Tools
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2  mt-3 col-sm-6 col-6 mb-4">
                        <div>
                            <h6 class="text-sm">Resources</h6>
                            <ul class="flex-column ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                        Illustrations
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                        Bits & Snippets
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/affiliates/new"
                                        target="_blank">
                                        Affiliate Program
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2  mt-3 col-sm-6 col-6 mb-4">
                        <div>
                            <h6 class="text-sm">Help & Support</h6>
                            <ul class="flex-column ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                        Contact Us
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/knowledge-center"
                                        target="_blank">
                                        Knowledge Center
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer"
                                        target="_blank">
                                        Custom Development
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/sponsorships"
                                        target="_blank">
                                        Sponsorships
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 mt-3 col-sm-6 col-6 mb-4 me-auto">
                        <div>
                            <h6 class="text-sm">Legal</h6>
                            <ul class="flex-column ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.creative-tim.com/knowledge-center/terms-of-service"
                                        target="_blank">
                                        Terms & Conditions
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.creative-tim.com/knowledge-center/privacy-policy"
                                        target="_blank">
                                        Privacy Policy
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                        Licenses (EULA)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center">
                            <p class="text-dark my-4 text-sm font-weight-normal">
                                All rights reserved. Copyright © <script>
                                    document.write(new Date().getFullYear())

                                </script> <a href="#"
                                    target="_blank">Ubeeka</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--   Core JS Files   -->
    <script src="{{asset('public/landing_page/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/landing_page/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/landing_page/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>


    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{asset('public/landing_page/assets/js/plugins/countup.min.js')}}"></script>

    <script src="{{asset('public/landing_page/assets/js/plugins/choices.min.js')}}"></script>

    <script src="{{asset('public/landing_page//assets/js/plugins/prism.min.js')}}"></script>
    <script src="{{asset('public/landing_page//assets/js/plugins/highlight.min.js')}}"></script>



    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{asset('public/landing_page//assets/js/plugins/rellax.min.js')}}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{asset('public/landing_page//assets/js/plugins/tilt.min.js')}}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{asset('public/landing_page//assets/js/plugins/choices.min.js')}}"></script>


    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{asset('public/landing_page//assets/js/plugins/parallax.min.js')}}"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{asset('public/landing_page//assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript">
    </script>


    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }

    </script>

</body>

</html>
