<section class="make-customer-area  fix">

<div class="container">
	 <div class="order-complete-container">
        <div class="order-complete-message">
            <h1 style="color: #62745F;">Thank You for Your Order!</h1>
            <p>Your order has been successfully processed. You will receive a confirmation email shortly.</p>
        </div>

        <div class="booking-details" style="    text-align: left;">
            <?php 

            $getBookinginfo = getBookinginfo($getLatestRow->booking_id);
            $getRoomName = getRoomName($getBookinginfo->room_id);

        $formattedDate = date("M d, Y", strtotime($getBookinginfo->createAt));

            $date = new DateTime($getBookinginfo->createAt);

        // Add one day
        $date->modify('+1 day');
        $newDate = $date->format('Y-m-d H:i:s');
        $newDateInfo = date("M d, Y", strtotime($newDate));
            ?>
            <h3>Booking Details</h3>
            <p><strong>Booking ID:</strong> <?= $getBookinginfo->hotel_id?></p>
            <p><strong>Hotel Name:</strong> <?= $getRoomName->hotel_name?></p>
            <p><strong>Check-In Date:</strong> <?=  $formattedDate ?></p>
            <p><strong>Check-Out Date:</strong> <?=  $newDateInfo ?></p>
            <p><strong>Guests:</strong> <?= $getBookinginfo->adults?></p>
            <p><strong>Total Amount:</strong> CHF <?=  number_format($getBookinginfo->price, 2, '.', '') ?> </p>
        </div>

        <div class="continue-shopping">

            <a href="<?= base_url('welcome')?>" class="btn btn-book-now">Continue Shopping</a>
            <a href="<?= base_url('front/orderhistory')?>" class="btn btn-book-now">View Order History</a>
        </div>
    </div>
</div>
</section>
<style type="text/css">
	/* General Styling */
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
.order-complete-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    border: 2px solid #62745F;
}

h1 {
    font-size: 2.5em;
    color: #28a745;
    margin-bottom: 20px;
}

.order-complete-message p {
    font-size: 1.1em;
    color: #555;
}

.order-details {
    margin-top: 30px;
    text-align: left;
}

.order-details h2 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 15px;
}

.order-details ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.order-details ul li {
    font-size: 1.1em;
    margin: 10px 0;
    color: #444;
}

.order-details ul li strong {
    color: #333;
}

.continue-shopping {
    margin-top: 40px;
}

.continue-shopping .btn {
    text-decoration: none;
    background-color: #28a745;
    color: white;
    padding: 12px 25px;
    font-size: 1.2em;
    border-radius: 5px;
    margin: 10px;
    display: inline-block;
}

.continue-shopping .btn:hover {
    background-color: #218838;
}

@media (max-width: 768px) {
    .order-complete-container {
        padding: 15px;
    }

    .order-details ul li {
        font-size: 1em;
    }

    .continue-shopping .btn {
        padding: 10px 20px;
    }
}

</style>