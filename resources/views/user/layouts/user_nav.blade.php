<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-1 start-0 end-0 mx-1 ">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip"
                        title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        <img class="rounded-circle" src="{{asset('public/image/logo_ubeeka.jpeg')}}" width="55"
                            height="auto" alt="" srcset="">
                        <b style="font-size:15px; color: #eb1207;">UBK GROUP</b>
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-home opacity-6 me-2 text-md"></i>
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-shopping-bag opacity-6 me-2 text-md"></i>
                                    Produk
                                    <img src="{{asset('public/landing_page/assets/img/down-arrow-dark.svg')}}"
                                        alt="down-arrow" class="arrow ms-auto ms-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                            <span>About Us</span>
                                        </a>
                                        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                            <span>Contact Us</span>
                                        </a>
                                        <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                            <span>Author</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-book opacity-6 me-2 text-md"></i>
                                    Layanan
                                    <img src="{{asset('public/landing_page/assets/img/down-arrow-dark.svg')}}" alt="down-arrow"
                                        class="arrow ms-auto ms-md-2">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-block">
                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./presentation.html">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Tanya Dokter</h6>
                                                        <span class="text-sm">Pilih Dokter untuk Keluhan</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./presentation.html">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Logistik</h6>
                                                        <span class="text-sm">Mengantar Barang</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </div>
                                </ul>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                                    Informasi
                                    <img src="{{asset('public/landing_page/assets/img/down-arrow-dark.svg')}}" alt="down-arrow"
                                        class="arrow ms-auto ms-md-2">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg"
                                    aria-labelledby="dropdownMenuDocs">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Kontak</h6>
                                                    <span class="text-sm">Tanya Sebelum Memilih Layanan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                        Partner</h6>
                                                    <span class="text-sm">PT. UBK, MyCLNQ</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row d-lg-none">
                                        <div class="col-md-12 g-0">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./pages/about-us.html">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                    Getting Started</h6>
                                                <span class="text-sm">All about overview, quick start, license and
                                                    contents</span>
                                            </a>

                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./pages/about-us.html">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                    Foundation</h6>
                                                <span class="text-sm">See our colors, icons and typography</span>
                                            </a>

                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./pages/about-us.html">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                    Components</h6>
                                                <span class="text-sm">Explore our collection of fully designed
                                                    components</span>
                                            </a>

                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./pages/about-us.html">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                    Plugins</h6>
                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                            </a>

                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="./pages/about-us.html">
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                    Utility Classes</h6>
                                                <span class="text-sm">For those who want flexibility, use our utility
                                                    classes</span>
                                            </a>
                                        </div>
                                    </div>

                                </ul>
                            </li>
                            <!--  -->
                            <li class="nav-item my-auto ms-3 ms-lg-0">
                                <a href="{{route('login')}}"
                                    class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Masuk</a>
                            </li>
                               
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
