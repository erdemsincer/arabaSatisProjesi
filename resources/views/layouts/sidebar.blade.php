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
            <a class="nav-link" href="{{route('advertisement')}}">
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
