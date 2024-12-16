<body>
<!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2" style="padding-left: 110px;">
                            <div class="logo">
                               <a href="<?= base_url('/')?>"><img src="<?= base_url('assets/front/img/logo/logo.png')?>" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-10 col-lg-10" style="padding-right: 110px;">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="<?= base_url('/')?>">ACCOMENDATION</a></li>
                                        <li><a href="<?= base_url('/')?>">RESTORANT</a></li>
                                        <li><a href="<?= base_url('/')?>">GALLERY</a></li>
                                        <li><a href="<?= base_url('/')?>">ENG</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">EN</a></li>
                                                
                                            </ul>
                                        </li>
                                        <?php 
                                        if($this->session->userdata('email') == null){ ?>
                                                <li><a href="<?= base_url('front/login')?>">I PREFER SIGN IN</a></li>
                                      <?php      }else{?>
                                            <li><a href="blog.html"><?= $this->session->userdata('fname')?></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url('front/orderhistory')?>">Booking</a></li>
                                                <li><a href="<?= base_url('front/logout')?>">Logout</a></li>
                                            </ul>
                                        </li>
                                         <?php     }
                                        ?>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>