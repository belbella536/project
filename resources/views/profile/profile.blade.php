<x-layout>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Profile</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm order-2 order-sm-1">
                            <div class="d-flex align-items-start mt-3 mt-sm-0">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xl me-3">
                                        <img src="{{ asset('images/users/avatar-2.jpg') }}" alt="Profile"
                                            class="img-fluid rounded-circle d-block">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="font-size-16 mb-1">
                                            {{ auth()->user()->name ?? 'Aditya Taufik Ismail' }}
                                        </h5>
                                        <span
                                            class="badge badge-soft-primary font-size-13 ">{{ auth()->user()->role ?? 'User' }}</span>

                                        <div
                                            class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                            <div>
                                                <i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>
                                                {{ auth()->user()->username ?? '@adityataufik' }}
                                            </div>
                                            <div>
                                                <i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>
                                                {{ auth()->user()->email ?? 'aditya@example.com' }}
                                            </div>
                                            <div>
                                                <i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>
                                                FTIK UIN Sunan Kudus
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto order-1 order-sm-2">
                            <div class="d-flex align-items-start justify-content-end gap-2">
                                <div>
                                    <a href="#" class="btn btn-soft-primary"><i class="bx bx-pencil me-1"></i> Update
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="profile-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" data-bs-toggle="tab" href="#data-diri" role="tab">Data
                                Diri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" data-bs-toggle="tab" href="#tentang" role="tab">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">

                <div class="tab-pane active" id="data-diri" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Diri</h4>
                            <p class="card-title-desc">Informasi Data diri anda dalam sistem applikasi</p>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="mt-4 mt-lg-0">
                                    <form>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input"
                                                class="col-sm-3 col-form-label">First
                                                name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="horizontal-firstname-input"
                                                    placeholder="Enter your First Name">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-username-input"
                                                class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="horizontal-username-input"
                                                    placeholder="Enter your Username">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-email-input"
                                                class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="horizontal-email-input"
                                                    placeholder="Enter your Email">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-password-input"
                                                class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    id="horizontal-password-input" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-2">
                                                <div>
                                                    <button type="submit" class="btn btn-primary w-md">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tentang" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted">Isi deskripsi profile di sini...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Skills</h5>
                    <div class="d-flex flex-wrap gap-2 font-size-15">
                        <span class="badge badge-soft-primary">Laravel</span>
                        <span class="badge badge-soft-primary">Tailwind CSS</span>
                        <span class="badge badge-soft-primary">Alpine.js</span>
                        <span class="badge badge-soft-primary">Livewire</span>
                        <span class="badge badge-soft-primary">Filament</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Deskripsi</h5>
                    <div class="d-flex flex-wrap gap-2 font-size-15">
                        <p class="text-muted">Isi deskripsi profile di sini...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
        <script src="assets/js/pages/form-editor.init.js"></script>
    @endsection
</x-layout>