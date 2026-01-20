<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>CRUD | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
    <meta name="author" content="Techzaa" />
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
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">
        @include('components.layout.navbar')
        @include('components.layout.sidebar')
        <div class="page-content">

            @yield('content')
        @include('components.layout.footer')


        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{url('assets_new')}}/js/vendor.js"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{url('assets_new')}}/js/app.js"></script>

    <!-- Vector Map Js -->
    <script src="{{url('assets_new')}}/vendor/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{url('assets_new')}}/vendor/jsvectormap/maps/world-merc.js"></script>
    <script src="{{url('assets_new')}}/vendor/jsvectormap/maps/world.js"></script>

    <!-- Dashboard Js -->
    <script src="{{url('assets_new')}}/js/pages/dashboard-analytics.js"></script>
    @stack('scripts')
</body>

</html>