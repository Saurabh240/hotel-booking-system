  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="width: 100%;display: flex;">
      <!-- <img src="<?= base_url('assets/image/logo.png')?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8"> -->
       <h3>Hotel System</h3>
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('fname')?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('dashboard')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/categorylist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Category Master
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/hotellist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Hotel Master
              
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?= base_url('dashboard/property_highlight')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
               Property Highlights Master
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/facilitieslist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Facilities Master
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/countrylist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Country Master
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/statelist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                State Master
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/citylist')?>" class="nav-link">
            <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                City Master
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/userlist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User List
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/bookinglist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Booking List
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/ratinglist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Rating
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/couponlist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Coupon Code
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/refundlist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Refund Price
              
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('dashboard/finaciallist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Finacial
              
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?= base_url('dashboard/userreportlist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Report
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dashboard/hotelreportlist')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Hotel Report
              
              </p>
            </a>
          </li>
        
        
          <li class="nav-item">
            <a href="<?= base_url('login/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Logout
              
              </p>
            </a>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
