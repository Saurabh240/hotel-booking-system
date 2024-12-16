 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Booking Details/li>
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
              <?php  

                  if($this->session->flashdata('insert_success_message')){

                    echo '<div class="alert alert-success">';

                    echo '<button class="close" data-dismiss="alert"></button>';

                    echo $this->session->flashdata('insert_success_message');

                    echo '</div>';

                  }

                  if($this->session->flashdata('message')){

                     echo '<div class="alert" style="    padding: 0;    color: red;">';
         
                       echo $this->session->flashdata('message');
         
                     echo '</div>';
         
                   }

                  ?>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Booking Id</th>
                    <th>Room Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Price</th>
                    <th>Action</th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($orderDetails as $key => $value) { 
                    $getBookinginfo = getBookinginfo($value->booking_id);
                    $getRoomName = getRoomName($getBookinginfo->room_id);
                    $formattedDate = date("M d, Y", strtotime($value->createAt));

                    $date = new DateTime($value->createAt);

                    // Add one day
                    $date->modify('+1 day');
                    $newDate = $date->format('Y-m-d H:i:s');
                    $newDateInfo = date("M d, Y", strtotime($newDate));
                    $getUserInfo = getUserInfo($value->user_id);
                   ?>
                  <tr>
                   <td><?php echo $value->id?></td>
                    <td><?php echo $getUserInfo->first_name?></td>
                    <td><?php echo $getBookinginfo->hotel_id?></td>
                    <td><?php echo $getRoomName->hotel_name?></td>
                    <td><?php echo $formattedDate?></td>
                    <td><?php echo $newDateInfo?></td>
                    <td>CHF <?= number_format($getBookinginfo->price, 2, '.', '');?></td>
                     <td style="width:100px">
                        <a href="<?= base_url('dashboard/viewOrder/'.$value->id)?>" class="btn btn-default"><i class="fa fa-eye"></i></a>

                   

                    </td>
                  </tr>
                   
                <?php } ?>
                 
                  </tbody>
                 
                </table>
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