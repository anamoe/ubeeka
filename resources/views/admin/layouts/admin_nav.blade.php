<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"> Ubeeka Admin</a>
            <a class="navbar-brand hidden" href="./"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::segment(1) === 'admin_home' ? 'active' : null }}">
                    <a href="{{route('admin_home')}}"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                </li>
                <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown {{ Request::segment(1) === 'produk' || 'pesanan_produk' ? 'active' : null }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Produk</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('produk')}}">Produk</a></li>
                        <li><i class="fa fa-shopping-bag"></i><a href="{{route('pesanan_produk')}}">Pesanan Produk</a></li>
                        
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'logistik' ? 'active' : null }}">
                    <a href="{{route('logistik')}}"> <i class="menu-icon fa fa-truck"></i>Logistik </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
