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
</head>
<body style="font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji">
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" >
                <a class="text-white text-decoration-none" href="{{route('mainpage')}}"><h1 class="mb-0">Arabam</h1></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link"><b>Keşfet</b></span>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('mainpage')}}">
                      <span class="menu-icon">
                        <i class="mdi mdi-home" style="margin-top: 3px"></i>
                      </span>
                        <span class="menu-title">Ana Sayfa</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('profile')}}">
                      <span class="menu-icon">
                        <i class="mdi mdi-account" style="margin-top: 3px"></i>
                      </span>
                        <span class="menu-title">Profil</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="#">
                      <span class="menu-icon">
                        <i class="mdi mdi-tag" style="margin-top: 3px"></i>
                      </span>
                        <span class="menu-title">İlanlar</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('sale')}}">
                          <span class="menu-icon align-items-center">
                            <i class="mdi mdi-plus-circle" style="margin-top: 3px"></i>
                          </span>
                        <span class="menu-title">İlan Ekle</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="text-white navbar-brand brand-logo-mini p-0 " href="{{route('mainpage')}}"><h1 class="mb-0 text-center">A</h1></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" style="background-color: #222632">

                    <ul class="navbar-nav navbar-nav-right w-100 justify-content-between">
                        <h2 class="mb-0 ml-4">@yield('pageHeader')</h2>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="{{asset('coronatemplate/assets/images/faces/face15.jpg')}}" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Ulvi Karabıyık</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profil</h6>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Hesap Ayarları</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Çıkış Yap</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
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
