<section class="make-customer-area  fix">

<div class="container">
    <div class="row">
         <form action="<?= base_url('front/orderbooking')?>" method="POST">
        <div class="col-md-8" style="float:left;
 ">
            
<input type="hidden" name="hotel_id" value="<?= $newBookingId->id?>">
                    <!-- First Section: Guest Details -->
                    <div class="section guest-details" style=" padding: 20px;border: 2px solid #62745F;">
                    <div class="row">
                        <div class="col-md-12">
                            
                       
                        <h2>GUEST DETAILS</h2>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" value="<?= $this->session->userdata('fname')?>" name="first_name" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" value="<?= $this->session->userdata('lname')?>" name="last_name" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="country">Country</label>
                            <input type="text" id="country" value="India" name="country" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="postal-code">Postal Code</label>
                            <input type="text" id="postal-code" name="postal_code" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="email">Email</label>
                            <input type="email" value="<?= $this->session->userdata('email')?>" id="email" name="email" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                         </div>
                    </div>
                    </div>

                    <!-- Second Section: Payment Information -->
                    <div class="section payment-info" style=" padding: 20px;border: 2px solid #62745F;">
                        <div class="row">
                            
                       
                        <h2>PAYMENT INFORMATION</h2>
                        <div class="col-md-12">
                            
                      
                        <div class="col-md-6 input-group" style="float:left;">
                            <label for="card-number">Card Number</label>
                            <input type="text" id="card-number" name="card_number" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="card-name">Name on Card</label>
                            <input type="text" id="card-name" name="card_name" required>
                        </div>
                         <div class="col-md-6 input-group" style="float:left;">
                            <label for="expiry-date">Expiry Date</label>
                            <input type="month" id="expiry-date" name="expiry_date" required>
                        </div>
                          </div>
                         </div>
                    </div>
            
        </div>
        <div class="col-md-4" style="float:left;">
                    <!-- Third Section: Your Stay -->
            <div class="section your-stay"  style=" padding: 20px;border: 2px solid #62745F;">
                <h2>YOUR STAY</h2>
                <p>Fri, Aug 12 2022 - Sun, Aug 14 2022</p>
                <?php 
                $getRoomName = getRoomName($newBookingId->room_id);
                ?>
                <?php if($getRoomName->group_pro == 1){?>
                <span class="f770ecbb66" id=":rl:">
                    <div class="ccb65902b2">You selected</div>
                    <div class="e1eebb6a1e"><?= $newBookingId->rooms?> room for <?= $newBookingId->adults?> adults</div>
                </span>
            <?php } ?>
                <p><?= $getRoomName->hotel_name?> <span style="float:right;">CHF <?= number_format($newBookingId->price, 2, '.', '');
?></span></p>



<div class="refund_price_section">
    <?php 
    $extraCharge = ($refund_priceData->price * $newBookingId->price) / 100;
    $totalPrice = $newBookingId->price + $extraCharge;
    ?>
    <input type="hidden" id="refund_prices" value="<?= $totalPrice ?>">
    <input type="hidden" id="original_refund_prices" value="<?= $newBookingId->price ?>">

    <label>
        <input type="checkbox" id="refund_price_info"> Refundable ( +<?= $extraCharge ?> )
    </label>
</div>

<input type="hidden" name="refund_id"  value="2">

<input type="hidden" name="total_refund_price" class="total_refund_price" value="<?= number_format($newBookingId->price, 2, '.', '')?>">


                <hr>
                 <h3>Total: CHF <span class="total_price_display"><?= number_format($newBookingId->price, 2, '.', '')?></span></h3>
            </div>

            <!-- Total Section -->
            <div class="total-section">
                <button type="submit" class="btn btn-book-now" data-id="<?= $value->id?>">Proceed to Payment</button>
            </div>
        </div>
        </form>   
    </div>
    


    
</div>
</section>

<style type="text/css">
     .btn-book-now {
      margin-top: 15px;
      background-color: #62745F !important;
      color: white;
      border: none;
      width: 100%;
  padding: 25px !important;
    }

    .btn-book-now:hover {
      background-color: #0056b3;
    }

    .checkout-container {
    max-width: 1000px;
    margin: 30px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

h3 {
    font-size: 1.3em;
    margin-bottom: 10px;
    text-align: right;
}

.section {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input-group input:focus {
    outline-color: #5b9bd5;
}

.total-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #ddd;
}

.btn {
    background-color: #5b9bd5;
    color: white;
    padding: 10px 20px;
    font-size: 1.1em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #4a8ab5;
}

@media (max-width: 768px) {
    .checkout-container {
        padding: 10px;
    }
    .input-group input {
        font-size: 0.9em;
    }
    .total-section {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
    const originalPrice = parseFloat($('#original_refund_prices').val());
    const refundablePrice = parseFloat($('#refund_prices').val());

    // Event listener for checkbox
    $('#refund_price_info').change(function() {
        if ($(this).is(':checked')) {
            // Checkbox is checked, show refundable price
            $('.total_price_display').text(refundablePrice.toFixed(2));
            $('.total_refund_price').val(refundablePrice.toFixed(2));
            
        } else {
            // Checkbox is unchecked, show original price
            $('.total_price_display').text(originalPrice.toFixed(2));
            $('.total_refund_price').val(originalPrice.toFixed(2));
        }
    });
});

</script>