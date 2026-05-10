<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login | FTIK UIN Sunan Kudus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/preloader.min.css') }}" type="text/css" />

        <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <style>
            body, html {
                overflow: hidden;
                height: 100vh;
            }
            .auth-page {
                height: 100vh;
            }
            .auth-full-page-content {
                height: 100vh;
                overflow-y: auto;
            }
        </style>
    </head>

    <body>
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-1 mb-md-1 text-center">
                                        <a href="#" class="d-block auth-logo">
                                            <img src="{{ asset('images/logo-sm.svg') }}" alt="" height="28"> <span class="logo-txt">Minia</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Selamat Datang</h5>
                                            <p class="text-muted mt-2">Sistem Informasi Mandiri FTIK UIN Sunan Kudus</p>
                                        </div>

                                        <!-- Toast Container -->
                                        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1005">

                                            <!-- Toast Success -->
                                            @if (session('success'))
                                                <div id="successToast" class="toast align-items-center text-white bg-success border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                                                    <div class="d-flex">
                                                        <div class="toast-body d-flex align-items-center">
                                                            <i class="mdi mdi-check-circle-outline fs-4 me-2"></i> {{ session('success') }}
                                                        </div>
                                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            @endif

                                            <!-- Toast Error -->
                                            @error('login')
                                                <div id="errorToast" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                                    <div class="d-flex">
                                                        <div class="toast-body d-flex align-items-center">
                                                            <i class="mdi mdi-alert-circle-outline fs-4 me-2"></i> {{ $message }}
                                                        </div>
                                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            @enderror

                                        </div>

                                        <form class="needs-validation mt-4 pt-2" novalidate action="{{ route('login.process') }}" method="POST">
                                            @csrf
                                            
                                            <div class="mb-3">
                                                <label for="login" class="form-label">Username / Email</label>
                                                <input type="text" class="form-control" id="login" name="login" value="{{ old('login') }}" placeholder="Enter username or email" required>  
                                                <div class="invalid-feedback">
                                                    Please Enter Username or Email
                                                </div>      
                                            </div>
                    
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label" for="password">Password</label>
                                                    </div>
                                                    <!-- <div class="flex-shrink-0">
                                                        <div>
                                                            <a href="#" class="text-muted">Forgot password?</a>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                                    <div class="invalid-feedback">
                                                        Please Enter Password
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="remember-check" name="remember">
                                                        <label class="form-check-label" for="remember-check">
                                                            Remember me
                                                        </label>
                                                    </div>  
                                                </div>
                                            </div> -->

                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </form>

                                        <div class="mt-3 text-center">
                                            <p class="text-muted mb-0">Belum punya akun ? <a href="{{ route('registeration') }}" class="text-primary fw-semibold"> Daftar sekarang </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('libs/pace-js/pace.min.js') }}"></script>
        <script src="{{ asset('js/pages/validation.init.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Konfigurasi durasi Toast (5 detik)
                const toastOptions = { delay: 5000 };

                // Cek dan tampilkan Toast Success jika ada
                const successToastEl = document.getElementById('successToast');
                if (successToastEl) {
                    const successToast = new bootstrap.Toast(successToastEl, toastOptions);
                    successToast.show();
                }

                // Cek dan tampilkan Toast Error jika ada
                const errorToastEl = document.getElementById('errorToast');
                if (errorToastEl) {
                    const errorToast = new bootstrap.Toast(errorToastEl, toastOptions);
                    errorToast.show();
                }
            });
        </script>

    </body>
</html>