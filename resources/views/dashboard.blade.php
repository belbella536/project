<x-layout>
    <x-slot:title>
        Dashboard Overview
    </x-slot>

    <!-- INJEKSI CSS KHUSUS DASHBOARD -->
    @push('styles')
        <!-- plugin css vectormap -->
        <link href="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- ============================================== -->
    <!-- PASTE SEMUA KONTEN CARD & CHART ANDA DI SINI   -->
    <!-- ============================================== -->


    <!-- INJEKSI JS KHUSUS DASHBOARD -->
    @push('scripts')
        <!-- apexcharts -->
        <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js vectormap -->
        <script src="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        
        <!-- dashboard init (Eksekutor Data Chart & Map) -->
        <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>
    @endpush

</x-layout>