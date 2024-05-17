<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('profilepage/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('profilepage/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('profilepage/assets/images/favicon.png')}}" />
</head>
<body style="font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji">
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <h1>Profil</h1>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Keşfet</span>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('mainpage')}}">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                        <span class="menu-title">Ana Sayfa</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                        <span class="menu-title">İlanlar</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('profilepage/assets/images/logo-mini.svg')}}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" style="background-color: #222632">

                    <ul class="navbar-nav navbar-nav-right w-100 justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="{{asset('profilepage/assets/images/faces/face15.jpg')}}" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
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
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kişisel Bilgiler</h4>
                                    <p class="card-title"><b>Adınız:</b></p>
                                    <p class="card-title"><b>Soyadınız:</b></p>
                                    <p class="card-title"><b>E-Posta Adresiniz:</b></p>
                                    <p class="card-title"><b>Hesabınızın Oluşturulma Tarihi:</b></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h4 class="card-title mb-1">Siparişler</h4>
                                        <p class="text-muted mb-1">Sipariş Verildi</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom align-items-center">
                                                    <div class="preview-thumbnail" style="width: 100px;height: 80px">
                                                        <img class="w-100 h-100" src="" alt="">
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow " >
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">TOGG</h6>
                                                            <p class="text-muted mb-0">Mehmet Ali</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">15 dakika önce</p>
                                                            <button type="button" class="btn btn-inverse-danger btn-fw">İptal Et</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Verdiğiniz İlanlar</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th> Araba </th>
                                                <th> İlana Çıkış Tarihi </th>
                                                <th> Fiyatı </th>
                                                <th> Durumu </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('profilepage/assets/images/faces/face1.jpg')}}" alt="image" />
                                                    <span class="pl-2">Golf</span>
                                                </td>
                                                <td> 14.08.2021 </td>
                                                <td> $14,500 </td>
                                                <td>
                                                    <div class="badge badge-outline-success">İlanda</div>
                                                </td>
                                                <td style="width: 13%" class="p-0">
                                                    <button type="button" class="btn btn-inverse-danger btn-fw ">İlandan Kaldır</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h4 class="card-title">Mesajlar</h4>
                                    </div>
                                    <div class="preview-list">
                                        <div class="preview-item border-top">
                                            <div class="preview-thumbnail">
                                                <img src="{{asset('profilepage/assets/images/faces/face6.jpg')}}" alt="image" class="rounded-circle" />
                                            </div>
                                            <div class="preview-item-content d-flex flex-grow">
                                                <div class="flex-grow">
                                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                        <h6 class="preview-subject">Mahmut</h6>
                                                        <p class="text-muted text-small">5 Dakika Önce</p>
                                                    </div>
                                                    <div class="d-flex flex-row justify-content-between">
                                                        <p class="text-muted">El arabası var mı kardeşim?</p>
                                                        <button type="button" class="btn btn-inverse-success btn-fw">Cevapla</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
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
    <script src="{{asset('profilepage/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('profilepage/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('profilepage/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('profilepage/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('profilepage/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('profilepage/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page /-->
    <!-- inject:js -->
    <script src="{{asset('profilepage/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('profilepage/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('profilepage/assets/js/misc.js')}}"></script>
    <script src="{{asset('profilepage/assets/js/settings.js')}}"></script>
    <script src="{{asset('profilepage/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('profilepage/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>
</html>
