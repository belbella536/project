<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'Dashboard' }} | FTIK UIN Sunan Kudus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Tempat untuk memuat CSS khusus per-halaman (seperti datatable, vectormap, dll) -->
    @stack('styles')

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-header />
        <x-sidebar />

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <x-right-sidebar />

    <!-- JAVASCRIPT GLOBAL (WAJIB ADA DI SEMUA HALAMAN) -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('libs/pace-js/pace.min.js') }}"></script>

    <!-- Tempat untuk memuat JS khusus per-halaman -->
    @stack('scripts')

    <!-- APP.JS HARUS BERADA DI PALING BAWAH AGAR INTERAKSI UI BERJALAN -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>