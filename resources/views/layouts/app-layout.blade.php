<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('coronatemplate/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('coronatemplate/assets/images/favicon.png')}}" />

    <style>
        a,a:hover{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body style="font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji">
    <div class="container-scroller">
        @yield('sidebar')
        <div class="container-fluid page-body-wrapper">
            @yield('navbar')
            <div class="main-panel">
                @yield('content')
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <p class="mb-0 ml-auto mr-3">Code23 GOATS tarafından yapıldı</p>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('coronatemplate/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('coronatemplate/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page /-->
    <!-- inject:js -->
    <script src="{{asset('coronatemplate/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/js/misc.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/js/settings.js')}}"></script>
    <script src="{{asset('coronatemplate/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('coronatemplate/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>
</html>
