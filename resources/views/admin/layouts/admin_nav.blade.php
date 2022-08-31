<div class="sidebar-menu">
    <ul class="menu">
        <!-- <li class='sidebar-title'>Main Menu</li> -->
        <li class="sidebar-item {{ Request::segment(1) === 'admin_home' ? 'active' : null }}">

            <a href="{{route('admin_home')}}" class='sidebar-link'>
                <i data-feather="home" width="20"></i>
                <span class="h6 mt-2">Beranda</span>
            </a>
        </li>
        <li class="sidebar-item has-sub {{ Request::segment(1) === 'produk' ? 'active' : null }}">
            <a href="#" class='sidebar-link '>
                <i data-feather="briefcase" width="20"></i>
                <span class="h6 mt-2">Data Produk</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="{{route('produk')}}">
                    <span class="h6">Produk</span>    
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <span class="h6">Pesanan</span> 
                    </a>
                </li> -->
            </ul>
        </li>
    </ul>
</div>
