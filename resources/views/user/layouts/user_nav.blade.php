<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-6 border-primary sticky-top p-0">
    <a href="{{url('/')}}" class="navbar-brand bg-primary d-flex align-items-center px-6 px-lg-5">
        <h2 class="mb-2 text-white">Ubeeka</h2>
    </a>
    <div class="nav-item">
        <a href="#" class="nav-link" data-bs-toggle="dropdown"><span style="color:red; font-size:24px;"
                class="fa fa-cart-plus"></span><span style="color:red;" class="badge badge-warning">3</span></a>
        <div class="dropdown-menu rounded-1 dropdown-menu-md fade-up">

            <!-- Jika Belum Login Atau Tidak Ada Barang Dikeranjang -->
            <div class="text-center ">
                <img src="{{asset('public/image/icon/bag.png')}}" class="w-25" alt=""><br>
                    <span class="mt-2">Belum Ada Barang</span>
            </div>

            <!-- Jika Sudah Login dan Ada Barang Dikeranjang -->


            <!-- <a href="#">
                <div class="col-sm-12 p-2">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="{{asset('public/image/icon/bag.png')}}" class="w-50" alt="">
                        </div>
                        <div class="col-sm-8">
                            <span style="font-size:14px;">Nama Barang</span><br>
                            <span style="font-size:14px;">Kandungan</span><br>
                            <span style="font-size:14px;">Stok :</span>
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                <span style="font-size:14px;">Harga : Rp. 20.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-12 p-2">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="{{asset('public/image/icon/bag.png')}}" class="w-50" alt="">
                        </div>
                        <div class="col-sm-8">
                            <span style="font-size:14px;">Nama Barang</span><br>
                            <span style="font-size:14px;">Kandungan</span><br>
                            <span style="font-size:14px;">Stok :</span>
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                <span style="font-size:14px;">Harga : Rp. 20.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </a> -->
            <hr>
            <div class="text-center">
                <a href="{{route('user_keranjang')}}"><span>Lihat Keranjang</span></a>
            </div>
        </div>
    </div>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
            <a href="{{route('user_tentang')}}" class="nav-item nav-link {{ Request::segment(1) === 'user_tentang' ? 'active' : null }}">Tentang</a>
            <a href="{{route('user_pilihan_paket_logistik')}}" class="nav-item nav-link {{ Request::segment(1) === 'user_pilihan_paket_logistik' ? 'active' : null }}">Logistik</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="#" class="dropdown-item">Makanan</a>
                    <a href="#" class="dropdown-item">Herbal</a>
                </div>
            </div> -->
            <a href="{{route('user_kontak')}}" class="nav-item nav-link {{ (request()->is('user_kontak')) ? 'active' : '' }}">Kontak</a>
            <a class="nav-item nav-link text-primary" href="{{route('login')}}">Masuk</a>
        </div>
        <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-phone text-primary me-3"></i>+62 8223 543 4277</h4>
    </div>
</nav>
