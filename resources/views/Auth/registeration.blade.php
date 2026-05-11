<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register | FTIK UIN Sunan Kudus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <!-- Tambahan agar halaman tidak bisa di-scroll -->
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
                overflow-y: auto; /* Memastikan form tetap bisa diakses di layar kecil, tapi body utama tidak scroll */
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
                                    <div class="auth-content my-auto">
                                        <div class="mt-5 mb-3 text-center">
                                            <img src="{{ asset('images/uin.png') }}" alt="" height="60">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="mb-0">Selamat Datang</h5>
                                            <p class="text-muted mt-2">Sistem Informasi Mandiri FTIK UIN Sunan Kudus</p>
                                        </div>
                                        
                                        <!-- Perhatikan penambahan method="POST" dan action route -->
                                        <form class="needs-validation mt-4 pt-2" novalidate action="{{ url('/registerProcess') }}" method="POST">
                                            @csrf <!-- Token wajib Laravel -->
                                            
                                            <!-- Field Name (Pengganti Fullname) -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>  
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Anda
                                                </div>      
                                            </div>

                                            <!-- Field Username -->
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Username Anda
                                                </div>  
                                            </div>

                                            <!-- Field Email -->
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email" required>  
                                                <div class="invalid-feedback">
                                                    Masukkan Email Anda
                                                </div>      
                                            </div>
                    
                                            <!-- Field Password -->
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Password Anda
                                                </div>       
                                            </div>

                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Daftar</button>
                                            </div>
                                        </form>

                                        <div class="mt-3 text-center">
                                            <p class="text-muted mb-0">Sudah punya akun? <a href="/login" class="text-primary fw-semibold"> Login </a> </p>
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

        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('libs/pace-js/pace.min.js') }}"></script>
        <!-- validation init -->
        <script src="{{ asset('js/pages/validation.init.js') }}"></script>

    </body>
</html>