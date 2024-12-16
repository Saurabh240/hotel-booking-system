 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Booking Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">

               
    <div class="order-history-container">
        <h1>Order History</h1>


<?php 
    $value = $orderDetails;
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
                  <?php 
                  if($value->order_status == 1){ ?>
                    <p><strong>Order Status:</strong> <span style="color:green">Completed</span></p>
                  <?php } else { ?>
                    <p><strong>Order Status:</strong><span style="color:red"> Cancel</span></p>
                  <?php }
                  ?>
                  

              <h4><strong>Payment Information:</strong></h4>
                  <p><strong>Payment Method:</strong> Credit Card</p>
                  <p><strong>Card Name:</strong> <?= $value->card_name?></p>
                  <p><strong>Card Number:</strong> <?= $value->card_number?></p>
                  <p><strong>CVV:</strong> <?= $value->cvv?></p>
                  <p><strong>Expiry Date:</strong> <?= $value->expiry_date?></p>
              </div>

   <div class="order-card-body">
     <h4><strong>Billing Information:</strong></h4>
                  <p><strong>User name:</strong><?= $value->first_name. ' '. $value->last_name?></p>
                  <p><strong>Address:</strong> <?= $value->address?></p>
                  <p><strong>Country:</strong> <?= $value->country?></p>
                  <p><strong>City:</strong> <?= $value->city?></p>
                  <p><strong>Postal Code:</strong> <?= $value->postal_code?></p>
                  <p><strong>Email:</strong> <?= $value->email?></p>
                  <p><strong>Mobile No:</strong> <?= $value->phone?></p>
              </div>              

              <div class="order-card-footer">
                 
                   <?php 
                   if($value->order_status == 2){

                   
                    if($getBookinginfo->refund_id == 1){ ?>
                        <p style="color:red">Notes :: The order has been canceled, but your amount is not refundable.</p>
                    <?php }else{ ?>
                        <p style="color:red">Notes :: The order has been canceled, Your amount will be refunded within 3-5 working days.</p>
                    <?php } }?>
                   

                  
              </div>
          </div>





        <!-- Add more order cards here -->
    </div>





              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
    margin-top: 0px;
}

.order-history-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    margin-top: 0 !important;
    padding-top: 0 !important;
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
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>