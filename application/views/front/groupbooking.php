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
               <!-- Booking Room Start-->
        <div class="booking-area">
            <div class="container">
               <div class="row ">
               <div class="col-12">
               <style>
    .booking-wrap {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping to the next row */
        gap: 15px; /* Add spacing between fields */
        align-items: center; /* Align items vertically */
    }

    .single-select-box {
        display: flex;
        flex-direction: column;
        width: 15%; /* Adjust width of each field */
    }

    .boking-tittle {
        margin-bottom: 5px; /* Space between label and input */
        font-size: 14px;
    }

    .boking-datepicker input {
        width: 90%; /* Make inputs take the full width */
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn.select-btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
        display: inline-block;
    }

    .btn.select-btn:hover {
        background-color: #0056b3;
    }
    .gj-datepicker-md [role="right-icon"]{left: -1px !important;}
</style>

<form action="<?= base_url('front/checkGroupBooking')?>" method="post">
    <div class="booking-wrap">
        <!-- Check In Date -->
        <div class="single-select-box">
            <div class="boking-tittle">
                <span>Check In Date:</span>
            </div>
            <div class="boking-datepicker">
                <input id="datepicker1" placeholder="10/12/2020" />
            </div>
        </div>

        <!-- Check Out Date -->
        <div class="single-select-box">
            <div class="boking-tittle">
                <span>Check Out Date:</span>
            </div>
            <div class="boking-datepicker">
                <input id="datepicker2" placeholder="12/12/2020" />
            </div>
        </div>

        <!-- Adults -->
        <div class="single-select-box">
            <div class="boking-tittle">
                <span>Adults:</span>
            </div>
            <div class="boking-datepicker">
                <input type="number" value="<?= $adults?>" style="height: 55px;" class="form-control" required name="adults" id="adults">
            </div>
        </div>

        <!-- Children -->
        <div class="single-select-box">
            <div class="boking-tittle">
                <span>Children:</span>
            </div>
            <div class="boking-datepicker">
                <input type="number" value="<?= $children?>" style="height: 55px;" class="form-control" name="children" id="children">
            </div>
        </div>

        <!-- Rooms -->
        <div class="single-select-box">
            <div class="boking-tittle">
                <span>Rooms:</span>
            </div>
            <div class="boking-datepicker">
                <input type="number" value="<?= $rooms?>" style="height: 55px;" class="form-control" required name="rooms" id="rooms">
            </div>
        </div>

        <!-- Book Now Button -->
        <div class="single-select-box" style="width: auto;">
             <button type="submit" class="btn btn-book-now">Book Now</button>
        </div>
    </div>
</form>

               </div>
               </div>
            </div>
        </div>
        <!-- Booking Room End-->

            <div class="container mt-4" style="padding-bottom: 30px;padding-top: 20px;">
                <h2>SELECT A ROOM</h2>
              <div class="row">
                <!-- Sort By Dropdown -->
                <div class="col-md-3">
                  <label for="sortBy">Sort by:</label>
                  <div style="display: block;float: right;">
                  <select class="form-control">
                    <option value="lowPrice">Lowest Price</option>
                    <option value="highPrice">Highest Price</option>
                  </select>
                  </div>
                </div>

                <!-- Balcony Checkbox -->
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="balcony">
                    <label class="form-check-label" for="balcony">
                      Balcony
                    </label>
                  </div>
                </div>

                <!-- Private Bathroom Checkbox -->
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="privateBathroom">
                    <label class="form-check-label" for="privateBathroom">
                      Private Bathroom
                    </label>
                  </div>
                </div>

                <!-- 2 Single Beds Checkbox -->
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="twoSingleBeds">
                    <label class="form-check-label" for="twoSingleBeds">
                      2 Single Beds
                    </label>
                  </div>
                </div>

                <!-- 1 Double Bed Checkbox -->
                <div class="col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="oneDoubleBed">
                    <label class="form-check-label" for="oneDoubleBed">
                      1 Double Bed
                    </label>
                  </div>
                </div>
              </div>
            </div>
        </section>





                <section class="make-customer-area  fix">
       <div class="container mt-4">
  <!-- Hotel Row -->
  <?php 
  foreach ($hotelData as $key => $value) { ?>
      

  <div class="row">
  <div class="col-md-12" style="margin-top: 17px;margin-bottom: 12px;order: 1px solid #ddd;border-radius: 8px;overflow: hidden;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);background-color: #fff;">
    <!-- Hotel Card -->
    <div class="hotel-card d-flex">
      <!-- Hotel Image -->
      <div class="hotel-image-container">
        <img src="<?= base_url('uploads/'.$value->hotel_image) ?>" class="hotel-image" alt="Hotel Image">
      </div>
      
      <!-- Hotel Info -->
      <div class="hotel-info">
        <div class="hotel-title"><?= $value->hotel_name ?></div>
        <div class="hotel-details">Sleeps 4 - 2 single beds, 1 double bed</div>
        <div class="hotel-description"><?= $value->descption ?></div>
        <hr>

<?php if($value->group_pro == 1){
        $finalPrice = $rooms * $value->price;
        } else { 
        $finalPrice =     $value->price;
        } 
?>
        <div class="hotel-price">CHF <span class="total_price_info" id="finalPrice_<?= $value->id?>"><?= $finalPrice ?></span></div>
        <div style="text-align: end;">
          <button class="btn btn-book-now booking_suc" data-id="<?= $value->id ?>">Book Now</button>
        </div>

      </div>
    </div>

<?php if($value->group_pro == 1){
    ?>
    <!-- Recommended Section -->
    <div class="page-section hp--group_rec js-k2-hp--block">
      <h3>Recommended for <?= $adults?> adults</h3>
      <table class="hp-group_recommendation__table" cellspacing="0">
        <tbody>
          <tr>
            <td class="roomName">
              <div class="roomNameInner">
                <span class="e2e-gr-room-name">
                  <?= $rooms?> × <a href="#RD1061271703"><?= $value->hotel_name ?></a>
                </span>
                <div class="gr-occ-bed-info">Max persons: <?= $adults?></div>
                <div class="m-rs-bed-display">
                    <?php 
                    for ($i=0; $i < $rooms; $i++) { $item = $i +1; ?>
                    <div>Bedroom <?= $item?>: 1 double bed</div>      
                    <?php }
                    ?>
                  
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

<?php } ?>

  </div>
</div>

 <?php }
    ?>
  
</div>
        </section>







        <!-- Make customer End-->
<style type="text/css">

.hotel-card {
  display: flex;
  gap: 20px;
  padding: 20px;


  background-color: #fff;
  margin-bottom: 20px;

}

.hotel-image-container {
  flex: 0 0 40%;
  max-width: 40%;
}

.hotel-image {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.hotel-info {
  flex: 1;
  padding: 12px;
}

.hotel-title {
  font-size: 1.5em;
  font-weight: bold;
  margin-bottom: 10px;
}

.hotel-details {
  font-size: 1em;
  margin-bottom: 10px;
  color: #555;
}

.hotel-description {
  font-size: 0.9em;
  color: #777;
  margin-bottom: 10px;
}

.hotel-price {
  font-size: 1.2em;
  color: #62745F !important;
  font-weight: bold;
}

.page-section {
  padding: 20px;
  background-color: #f9f9f9;
  margin-bottom: 16px;
}

.page-section h3 {
  font-size: 1.5em;
  margin-bottom: 20px;
  text-align: left;
}

.hp-group_recommendation__table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1em;
}

.roomNameInner {
  font-weight: bold;
}

.roomNameInner a {
  text-decoration: none;
  color: #62745F !important;
}

.roomNameInner a:hover {
  color: #0056b3;
}

.gr-occ-bed-info {
  font-size: 0.9em;
  color: #555;
  margin-top: 5px;
}

.m-rs-bed-display {
  margin-top: 10px;
  font-size: 0.9em;
}
    .page-section {
    padding: 20px;
    background-color: #f9f9f9;
}



.hp--group_rec h3 {
    margin: 0;
    padding: 15px;
    background-color: #62745F !important;
    color: #fff;
    font-size: 1.5em;
    text-align: center;
}

.hp-group_recommendation__table {
    width: 100%;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
}

.hp-group_recommendation__table tr {
    border-bottom: 1px solid #ddd;
}

.hp-group_recommendation__table td {
    padding: 10px;
    vertical-align: top;
}

.roomName {
    font-weight: bold;
    font-size: 1.1em;
}

.roomNameInner a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s ease;
}

.roomNameInner a:hover {
    color: #0056b3;
}

.gr-occ-bed-info {
    font-size: 0.9em;
    color: #555;
    margin-top: 5px;
}

.m-rs-bed-display {
    margin-top: 10px;
    font-size: 0.9em;
}

.m-rs-bed-display__block {
    margin-bottom: 10px;
}

.m-rs-bed-display__label {
    font-weight: bold;
    margin-bottom: 5px;
}

.m-rs-bed-display__bed-list-item {
    display: flex;
    align-items: center;
    gap: 10px;
}

.m-rs-bed-display__bed-type-icon {
    height: 16px;
    width: auto;
    fill: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hp-group_recommendation__table {
        display: block;
    }

    .hp-group_recommendation__table tr {
        display: block;
        border-bottom: none;
        margin-bottom: 15px;
    }

    .hp-group_recommendation__table td {
        display: block;
        padding: 0 0 10px;
    }

    .roomName {
        font-size: 1em;
    }

    .gr-occ-bed-info {
        font-size: 0.85em;
    }
}
    .nice-select{height: 34px;line-height: 19px;}
    .nice-select::after{margin-top: -8px;}
    .booking-area{margin-top: 20px;}
     .hotel-card {
    
      margin-bottom: 20px;
      display: flex;
      padding: 15px;
    }
    #refund_price_info{display: block !important;width: 34%;float: right;}
    .refund_price_section .nice-select{display: none;}
    .hotel-details{color: #898684;}
    .refund_price_section{width: 100%;display: flow-root;margin-top: 10px;}

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>


$(document).on("change","#refund_price_info",function(e){
    e.preventDefault();
    var refund_price_info = $(this).val();
    if(refund_price_info == 2){
       var refund_prices = $("#refund_prices").val(); 
       $(".total_price_info").html(refund_prices);
    }else{
        var original_refund_prices = $("#original_refund_prices").val(); 
       $(".total_price_info").html(original_refund_prices);

    }
    
});


$(document).on("click",".booking_suc",function(){
   var data_id =$(this).attr('data-id');
   var total_price_info =$("#finalPrice_"+data_id).html();
   var adults =$("#adults").val();
   var children =$("#children").val();
   var rooms =$("#rooms").val();
   // var refund_price_info = $("#refund_price_info").val();
   var userDetails = "<?= $this->session->userdata('email')?>";
if (userDetails === null || userDetails === "") {
   window.location.href = '<?= base_url('front/login')?>';
} else {
      var url = "<?= base_url('front/custmerBooking')?>";
    $.ajax({

        type: 'POST',

        url: url,

        data: {

            data_id:data_id,
            // refund_price_info:refund_price_info,
            total_price_info:total_price_info,
            rooms:rooms,
            adults:adults,
            children:children,
         },

        success: function(response) {
        window.location.href = '<?= base_url('front/checkout')?>';
        }
      });
}

 



});
</script>