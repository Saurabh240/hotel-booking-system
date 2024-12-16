<section class="make-customer-area  fix">

<div class="container">
	  <div class="order-history-container">
        <h1>Order History</h1>


<?php 
	foreach ($getOrderDetails as $key => $value) { 
		$getBookinginfo = getBookinginfo($value->booking_id);
		$formattedDate = date("M d, Y", strtotime($value->createAt));
		$getRoomName = getRoomName($getBookinginfo->room_id);

		$date = new DateTime($value->createAt);

		// Add one day
		$date->modify('+1 day');
		$newDate = $date->format('Y-m-d H:i:s');
		$newDateInfo = date("M d, Y", strtotime($newDate));

		?>
		
<input type="hidden" id="hotelOrderId" value="<?= $value->id?>">
<input type="hidden" id="getrefund_id" value="<?= $getBookinginfo->refund_id?>">
	        <div class="order-card">
	            <div class="order-card-header">
	                <span class="order-number">Order <?= $getBookinginfo->hotel_id?></span>
	                <span class="order-date"><?= $formattedDate ?></span>
	            </div>
	           

	              <!-- Room Details Section -->
    <div class="room-details">
        <h3>Room Details</h3>
        <div class="room-card">
            <div class="room-image">
                <img src="<?= base_url('uploads/'.$getRoomName->hotel_image)?>" style="width: 80px;">
            </div>
            <div class="room-info">
                <p><strong>Room Name:</strong> <?= $getRoomName->hotel_name ?></p>
                <p><strong>Guests:</strong> 2 Adult(s)</p>
                <p><strong>Check-in:</strong> <?= $formattedDate ?></p>
                <p><strong>Check-out:</strong> <?= $newDateInfo ?></p>
            </div>
        </div>
    </div>
     <div class="order-card-body">
	                <p><strong>Total:</strong> CHF <?= number_format($getBookinginfo->price, 2, '.', '');?></p>
	                <p><strong>Status:</strong> 

                        <?php 
                  if($value->order_status == 1){ ?>
                    <p><strong>Order Status:</strong> <span style="color:green">Completed</span></p>
                  <?php } else { ?>
                    <p><strong>Order Status:</strong><span style="color:red"> Cancel</span></p>
                  <?php }
                  ?>
                    </p>
	                <p><strong>Payment Method:</strong> Credit Card</p>
	            </div>
	            <div class="order-card-footer">
	               
                   <?php 
                   if($value->order_status == 2){

                   
                    if($getBookinginfo->refund_id == 1){ ?>
                        <p style="color:red">Notes :: The order has been canceled, but your amount is not refundable.</p>
                    <?php }else{ ?>
                        <p style="color:red">Notes :: The order has been canceled, Your amount will be refunded within 3-5 working days.</p>
                    <?php } }?>
                   
                   <?php 
                    if($value->order_status == 1){ ?>
                        <div><a href="javascript:void(0)" data-id="<?= $getBookinginfo->refund_id?>" class="btn btn-book-now refund_order">Cancel Order</a></div>
                    <?php }else{ ?>
                        <div><a href="javascript:void(0)" class="btn btn-book-now btn-disabled" disabled>Order Canceled</a></div>

                    <?php } ?>
	                
	            </div>
	        </div>


<?php 	} ?>


        <!-- Add more order cards here -->
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

h1 {
    text-align: center;
    color: #333;
    margin-top: 40px;
}

.order-history-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.order-card {
    background-color: #fff;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease;
}

.order-card:hover {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.order-card-header {
    display: flex;
    justify-content: space-between;
    font-size: 1.2em;
    margin-bottom: 15px;
}

.order-card-body {
    margin-bottom: 15px;
}

.order-card-body p {
    font-size: 1em;
    color: #555;
}

.order-card-footer {
    display: flex;
    justify-content: space-between;
}

.btn {
    text-decoration: none;
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #218838;
}

.reorder-btn {
    background-color: #007bff;
}

.reorder-btn:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .order-history-container {
        padding: 15px;
    }

    .order-card-header {
        font-size: 1em;
    }

    .order-card-body p {
        font-size: 0.9em;
    }

    .order-card-footer {
        flex-direction: column;
        align-items: flex-start;
    }

    .order-card-footer .btn {
        margin-top: 10px;
    }
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
$(document).on("click",".refund_order",function(){
   var data_id =$(this).attr('data-id');
 var hotelOrderId = $("#hotelOrderId").val();
 var getrefund_id = $("#getrefund_id").val();
 // if(getrefund_id == 1){
 //    alert("Order is canceled but your amount is not refundable.");
 // }
 if (getrefund_id == 1) {
      alert("The order has been canceled, but your amount is not refundable.");
    } else if (getrefund_id == 2) {
        alert('Your amount will be refunded within 3-5 working days.'); // Show message for getrefund_id == 2
    } else {
        alert('Invalid refund ID'); // Optional: Handle other cases
        return; // Stop execution if invalid
    }
   var url = "<?= base_url('front/refundOrder')?>";
    $.ajax({

        type: 'POST',

        url: url,

        data: {

            data_id:data_id,
            hotelOrderId:hotelOrderId,
            
         },

        success: function(response) {
        window.location.href = '<?= base_url('front/orderhistory')?>';
        }
      });

 



});
</script>