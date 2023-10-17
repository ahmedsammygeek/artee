 @php
 $lang = LaravelLocalization::getCurrentLocale() ;
 @endphp
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container-fluid">
      <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ asset('site_assets/'.$dir.'/images/logo.png') }}" alt="Artee" class="brand-image">
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="list-group order-1 order-md-3 navbar-nav navbar-no-expand ml-auto right-nav">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <a href="#" class="list-group-item list-group-item-action active">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="text-sm mb-1 text-bold">List group item heading</h5>
                <small>3 days ago</small>
              </div>
              <small>And some small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="text-sm mb-1 text-bold">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
              </div>
              <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="text-sm mb-1 text-bold">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
              </div>
              <small class="text-muted">And some muted small print.</small>
            </a>

          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="Card.html">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>

        <li class="nav-item dropdown header-profile">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="nav-link dropdown-toggle fa">
            <div class="image">
              <img src="img/user8-128x128.jpg" class="img-circle elevation-1 img-size-40" alt="User Image">
            </div>
          </a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow p-0">
            <li>
              <a href="Profile.html" class="user-panel d-flex p-2 bg-gray-light">
                <div class="image p-0">
                  <img class="img-circle elevation-1" alt="User Image" src="img/user2-160x160.jpg">
                </div>
                <div class="info">
                  <h5 href="#" class="d-block text-sm">Alexander Pierce</h5>
                </div>
              </a>
            </li>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a href="Wishlist.html" class="nav-link">
                  <i class="far fa-heart"></i> Wishlist
                </a>
              </li>
              <li class="nav-item">
                <a href="Orders.html" class="nav-link">
                  <i class="far fa-paper-plane"></i> My Orders
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-map-marker-alt"></i> My Addresses
                </a>
              </li>
              <li class="nav-item">
                <a href="../Ar/index.html" class="nav-link">
                  <i class="fas fa-language"></i> Arabic
                </a>
              </li>
              <li class="nav-item">
                <a href="Followers.html" class="nav-link">
                  <i class="far fa-user"></i> My Followers
                </a>
              </li>
              <li class="nav-item">
                <a href="Diamond.html" class="nav-link">
                  <i class="far fa-gem"></i> My Diamonds
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-cog"></i> Settings
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i> Log out
                </a>
              </li>
            </ul>

          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->