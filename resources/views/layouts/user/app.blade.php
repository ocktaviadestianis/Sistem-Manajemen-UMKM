<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>UMKM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jual Produk UMKM" />
    <meta name="author" content="Desti" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('assets_new')}}/images/favicon.ico">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{url('assets_new')}}/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{url('assets_new')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{url('assets_new')}}/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{url('assets_new')}}/js/config.min.js"></script>
    <style>
    header {
        position: sticky;
        top: 0;
        background: #FFF;
        z-index: 1005;
        padding: 20px;

    }

    .topbar {
        display: flex;
        justify-content: space-between;
        padding: 6px 40px;
        font-size: 14px;
        border-bottom: 1px solid #eee;
    }

    .topbar-text span {
        color: #2ecc71;
        font-weight: bold;
    }

    .navbar {
        display: flex;
        align-items: center;
        padding: 15px 40px;
        gap: 20px;
        border-top: 1px solid #979797;
        border-bottom: 1px solid #979797;
    }

    .logo {
        height: 45px;
    }

    .nav-search {
        display: flex;
        flex: 1;
        max-width: 450px;
    }

    .nav-search select,
    .nav-search input {
        padding: 8px;
        border: 1px solid #ccc;
        outline: none;
    }

    .nav-search select {
        border-radius: 6px 0 0 6px;
    }

    .nav-search input {
        flex: 1;
        border-left: none;
    }

    .nav-search button {
        padding: 8px 15px;
        border: 1px solid #ccc;
        border-left: none;
        background: #f5f5f5;
        cursor: pointer;
        border-radius: 0 6px 6px 0;
    }

    .nav-menu {
        display: flex;
        gap: 20px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #2c3e50;
        font-weight: 500;
    }

    .nav-menu a.active {
        color: red;
        font-weight: bold;
    }

    .nav-icon {
        display: flex;
        gap: 15px;
        font-size: 20px;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <div class="">

            <x-user.navbar />
            @yield('content')
            <x-user.footer />



        </div>

    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{url('assets_new')}}/js/vendor.js"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{url('assets_new')}}/js/app.js"></script>

    <script src="{{url('assets_new')}}/js/pages/property-grid.js"></script>

</body>

</html>