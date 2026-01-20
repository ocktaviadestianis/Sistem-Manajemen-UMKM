
<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box pt-2">
        <a href="#" class="logo-dark">
            <img src="{{url('logo.png')}}" class="logo-sm" alt="logo sm">
            <img src="{{url('logo.png')}}" class="logo-lg" alt="logo dark">
        </a>

        <a href="#" class="logo-light">
            <img src="{{url('logo.png')}}" class="logo-sm" alt="logo sm">
            <img src="{{url('logo.png')}}" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <i class="ri-menu-2-line fs-24 button-sm-hover-icon"></i>
    </button>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Menu</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <span class="nav-icon">
                        <i class="ri-home-office-line"></i>
                    </span>
                    <span class="nav-text">Dashboards</span>
                </a>
            </li>
            

           
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarLayouts">
                    <span class="nav-icon">
                        <i class="ri-layout-line"></i>
                    </span>
                    <span class="nav-text"> Produk </span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('category.index')}}" >Kategori Kerajinan</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('products.index')}}" >Produk UMKM</a>
                        </li>
                       
                    </ul>
                </div>
            </li>

            <li class="menu-title">Transaksi</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('pesanan.index')}}">
                    <span class="nav-icon">
                        <i class="ri-inbox-line"></i>
                    </span>
                    <span class="nav-text">Pesanan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarBaseUI">
                    <span class="nav-icon"><i class="ri-contrast-drop-line"></i></span>
                    <span class="nav-text">Pembayaran</span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('pesanan.list') }}">List Pembayaran</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('pesanan.verif') }}">Verifikasi Pembayaran</a>
                        </li>
                        
                    </ul>
                </div>
            </li> <!-- end Base UI Menu -->

        </ul>
    </div>
</div>