    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?= base_url('assets/front/img/hero/h1_hero.jpg')?>" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">HOTEL OLD INN</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?= base_url('assets/front/img/hero/h1_hero.jpg')?>" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">HOTEL OLD INN</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?= base_url('assets/front/img/hero/h1_hero.jpg')?>" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">HOTEL OLD INN</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

     
    

          <!-- Make customer Start-->
        <section class="make-customer-area  fix">
           
        <div class="row">
                <div class="col-md-12" style="padding: 45px;">
                    <div class="col-md-6" style="float: left;">
                    <div class="col-md-12">
                        <h2 class="contact-title">Sign In</h2>
                    </div>
                    <div class="col-md-12">
                         <?php  
                        if($this->session->flashdata('message')){
                            echo '<p style="color:red;">'.$this->session->flashdata('message').'</p>';
                        }
                          ?>
                        <form class="form-contact" action="<?= base_url('front/checkLogin')?>" method="post">
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"  required  placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <div class="form-group">
                                        <input class="form-control" name="passowrd" id="passowrd" required type="password"   placeholder="Password">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Sign In</button>
                            </div>
                        </form>
                    </div>  
                    </div>


                    <div class="col-md-6" style="float: left;">
                        <div class="col-12">
                        <h2 class="contact-title">Sign Up</h2>
                    </div>
                    <div class="col-md-12">
                         <?php  
                        if($this->session->flashdata('insert_success_message')){
                            echo '<p style="color:green;">'.$this->session->flashdata('message').'</p>';
                        }
                          ?>
                        <form class="form-contact" action="<?= base_url('front/register')?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control valid" name="first_name" id="first_name" required type="text"   placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control valid" name="last_name" id="last_name" required type="text"   placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" required type="email"   placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <div class="form-group">
                                        <input class="form-control valid" name="passowrd" required id="passowrd" type="password"   placeholder="Password">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    </div>
                
                    
                </div>
                </div>
        
        </section>





            
<style type="text/css">
    .nice-select{height: 34px;line-height: 19px;}
    .nice-select::after{margin-top: -8px;}
    .booking-area{margin-top: 20px;}
     .hotel-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      display: flex;
      padding: 15px;
    }
    .hotel-details{color: #898684;}


    .hotel-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
      margin-right: 15px;
    }

    .hotel-info {
      flex: 1;
    }

    .hotel-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #7A7674;
    }

    .hotel-description {
      font-size: 0.95rem;
      color: #555;
      color: #D1D0D0;
    }

    .hotel-price {
      font-size: 1.2rem;
      font-weight: bold;
      margin-top: 10px;
      text-align: end;
    }

    .btn-book-now {
      margin-top: 15px;
      background-color: #62745F !important;
      color: white;
      border: none;
    }

    .btn-book-now:hover {
      background-color: #0056b3;
    }

    /* Adjust image size for smaller screens */
    @media (max-width: 768px) {
      .hotel-card {
        flex-direction: column;
        align-items: center;
      }

      .hotel-image {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
      }
    }
</style>        