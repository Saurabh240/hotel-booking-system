    <main>
  <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
               <img src="<?= base_url('assets/front/img/hero/main_banner.png')?>">
               
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

                <div class="col-md-8">
                    
                

                    <!-- <form action="<?= base_url('front/checkGroupBooking')?>" method="post"> -->
                        <div class="booking-wrap" style="padding: 0px;border: 1px solid black;border-radius: 0;">
                    <div class="filter-section">
                            <!-- Check-in Date -->
                            <div class="filter-item" style="border-right: 1px solid black;">
                                <!-- <label for="check-in">Check-in</label> -->
                                <input type="text" id="check-in" name="check-in" readonly placeholder="Check In">
                            </div>

                            <!-- Check-out Date -->
                            <div class="filter-item" style="border-right: 1px solid black;">
                                <!-- <label for="check-out">Check-out</label> -->
                                <input type="text" id="check-out" name="check-out" readonly placeholder="Check Out">
                            </div>

                             <div class="filter-item">
                                <!-- <label for="guest-select">Guests</label> -->
                                <div class="dropdown-container">
                                    <input type="text" id="guest-select" class="dropdown-btn" readonly placeholder="Select Guests"  style="border: 0;" />
                                    <div class="dropdown-box" id="guest-dropdown">
                                        <div class="control-group">
                                            <label for="adults">Adults:</label>
                                            <span class="section_fliter" id="adult-minus">-</span>
                                            <input type="number" id="adults" value="1" min="1" max="10" readonly />
                                            <span class="section_fliter" id="adult-plus">+</span>
                                        </div>
                                        <div class="control-group">
                                            <label for="rooms">Rooms:</label>
                                            <span class="section_fliter" id="room-minus">-</span>
                                            <input type="number" id="rooms" value="1" min="1" max="5" readonly />
                                            <span class="section_fliter" id="room-plus">+</span>
                                        </div>
                                        <button class="done-btn btn btn-book-now" id="done-btn">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                          

                            <!-- Book Now Button -->
                            <!-- <div class="single-select-box" style="width: auto;">
                                 <button type="submit" class="btn btn-book-now" style="padding: 20px;">Book Now</button>
                            </div> -->
                        </div>
                    <!-- </form> -->

</div>
                <div class="col-md-4">
                    
                </div>


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

  if(!empty($hotelData)) { ?>
      

  <div class="row">
    <div class="col-md-8">
      <div class="hotel-card">
        <!-- Hotel Image (left side) -->
        <div style="flex: 0 0 40%; max-width: 40%;">
          
            <img src="<?= base_url('uploads/'.$hotelData->hotel_image)?>"  class="hotel-image">
        </div>
        
        <!-- Hotel Info (right side) -->
        <div class="hotel-info" style="flex: 1;padding: 12px;">
          <!-- Hotel Title -->
          <div class="hotel-title"><?= $hotelData->hotel_name?></div>
          
          <!-- Hotsel Details: Sleeps and Beds -->
          <div class="hotel-details">Sleeps 4 - 2 single beds, 1 double bed</div>

          <!-- Hotel Description -->
          <div class="hotel-description">
           <?= $hotelData->descption?>
          </div>
<hr>
          <!-- Price -->
          <div class="hotel-price">CHF  <span class="total_price_info"><?= $hotelData->price?></span></div>
       
          <!-- Book Now Button -->
          <div style="text-align: end;">
          <button class="btn btn-book-now booking_suc" data-id="<?= $hotelData->id?>">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 <?php }
    ?>
  
</div>
        </section>








        <!-- Make customer End-->
<style type="text/css">
    .flatpickr-input{border: unset;}
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
       .filter-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
    }

    .filter-item {
        display: flex;
        align-items: center;
        margin-bottom: 0; /* Remove bottom margin */
    }

    .filter-item label {
        font-weight: bold;
        margin-right: 10px;
    }

    .filter-item input,
    .dropdown-btn {
        padding: 8px 12px;
        font-size: 14px;
        width: 150px;
        margin-right: 10px;
    }

    .dropdown-container {
        position: relative;
        display: inline-block;
    }

    .dropdown-btn {
        cursor: pointer;
        border: 1px solid #ccc;
        text-align: left;
    }

    .dropdown-box {
        display: none;
        position: absolute;
        top: 35px;
        left: 0;
        padding: 15px;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 250px;
        border: 1px solid #ccc;
        z-index: 10;
    }

    .dropdown-box .control-group {
        margin-bottom: 10px;
    }

    .dropdown-box .control-group label {
        margin-right: 10px;
    }

    .done-btn {
        padding: 8px 12px;
        margin-top: 10px;
        cursor: pointer;
        background-color: #28a745;
        color: white;
        border: none;
        width: 88px;
        height: 40px;
    }

    .done-btn:hover {
        background-color: #218838;
    }

    #adults, #rooms {
        width: 65px;
        height: 34px;
    }

    #adult-minus, #adult-plus, #room-minus, #room-plus {
        width: 27px;
        height: 27px;
        cursor: pointer;
    }

    .section_fliter {
        padding: 6px;
        border: 1px solid lightgray;
        padding-right: 9px;
        padding-left: 9px;
        cursor: pointer;
    }

    /* Style for the "Book Now" button */
    .single-select-box button {
        margin-top: 0;
        padding: 12px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    .single-select-box button:hover {
        background-color: #0056b3;
    }

    /* Ensure items are aligned well when the page is smaller */
    @media (max-width: 768px) {
        .filter-section {
            flex-direction: column;
            align-items: flex-start;
        }

        .filter-item {
            margin-bottom: 15px;
        }
    }
</style>        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize flatpickr with the desired date format
        flatpickr("#check-in", {
            dateFormat: "D, M Y", // Format: Mon, Dec 2024
            onChange: function(selectedDates, dateStr, instance) {
                // You can handle the date change here if you need
                console.log('Selected Check-in Date:', dateStr); // Logs the selected date
            }
        });

        flatpickr("#check-out", {
            dateFormat: "D, M Y", // Format: Mon, Dec 2024
            onChange: function(selectedDates, dateStr, instance) {
                // You can handle the date change here if you need
                console.log('Selected Check-out Date:', dateStr); // Logs the selected date
            }
        });
    </script>

     <script>
        // Elements
        const dropdownBtn = document.getElementById('guest-select');
        const dropdownBox = document.getElementById('guest-dropdown');
        const doneBtn = document.getElementById('done-btn');

        const adultMinusBtn = document.getElementById('adult-minus');
        const adultPlusBtn = document.getElementById('adult-plus');
        const roomMinusBtn = document.getElementById('room-minus');
        const roomPlusBtn = document.getElementById('room-plus');

        const adultsInput = document.getElementById('adults');
        const roomsInput = document.getElementById('rooms');

        // Toggle dropdown visibility
        dropdownBtn.addEventListener('click', function() {
            dropdownBox.style.display = dropdownBox.style.display === 'block' ? 'none' : 'block';
        });

        // Update the guest selection
        doneBtn.addEventListener('click', function() {
            const adults = adultsInput.value;
            const rooms = roomsInput.value;
            dropdownBtn.value = `${adults} Adults · ${rooms} Rooms`; // Update the dropdown button with selected values
            dropdownBox.style.display = 'none'; // Hide dropdown
        });

        // Adults and Rooms buttons logic
        adultPlusBtn.addEventListener('click', function() {
            if (parseInt(adultsInput.value) < 10) {
                adultsInput.value = parseInt(adultsInput.value) + 1;
            }
        });

        adultMinusBtn.addEventListener('click', function() {
            if (parseInt(adultsInput.value) > 1) {
                adultsInput.value = parseInt(adultsInput.value) - 1;
            }
        });

        roomPlusBtn.addEventListener('click', function() {
            if (parseInt(roomsInput.value) < 5) {
                roomsInput.value = parseInt(roomsInput.value) + 1;
            }
        });

        roomMinusBtn.addEventListener('click', function() {
            if (parseInt(roomsInput.value) > 1) {
                roomsInput.value = parseInt(roomsInput.value) - 1;
            }
        });

        // Close the dropdown if clicked outside of it
        window.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown-container')) {
                dropdownBox.style.display = 'none';
            }
        });
    </script>
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
   var total_price_info =$(".total_price_info").html();
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
         },

        success: function(response) {
        window.location.href = '<?= base_url('front/checkout')?>';
        }
      });
}

 



});
</script>