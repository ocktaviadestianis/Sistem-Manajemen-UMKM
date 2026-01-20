<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2 text-primary" href="#">TokoKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">Produk</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{route('cart.index')}}">Menu
                        Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('orders.history')}}">Daftar
                        Pesanan</a></li>
                @endauth
            </ul>
            @guest
            <a href="{{ route('login') }}" class="btn btn-primary ms-lg-3">Login</a>
            @endguest
            @auth
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-lg-3">Logout</button>
            </form>
            @endauth
        </div>
    </div>
</nav> -->

<header class="">
    <div class="topbar-text">
        Selamat Belanja Berbagai Produk <span> UMKM</span>
    </div>
</header>

<nav class="navbar">
    <div class="nav-left">
        <img src="{{url('logo.png')}}" alt="Logo" class="logo">
    </div>

    <form action="{{ route('home') }}" method="GET">
        <div class="nav-search">
            <select name="category_id">
                <option value="">Cari Berdasarkan</option>
                @foreach($category as $item)
                <option value="{{ $item->id }}" {{ request('category_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->nama }}
                </option>
                @endforeach
            </select>

            <input type="text" placeholder="Cari" name="search" value="{{ request('search') }}">
            <button type="submit">Cari</button>
        </div>
    </form>

    <div class="nav-menu">
        <a href="#">Beranda</a>
        <a href="#">Produk</a>
        @auth
        <a href="{{route('cart.index')}}">Menu Checkout</a>
        <a class="nav-link" href="{{route('orders.history')}}">Daftar Pesanan</a>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary ms-lg-3 text-white">Login</a>
            @endguest
            @auth
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-lg-3">Logout</button>
            </form>
            @endauth
    </div>
</nav>