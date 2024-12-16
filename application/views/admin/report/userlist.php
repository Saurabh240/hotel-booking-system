 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Report  List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">User Report List</li>
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
    <div class="row">
        <div class="col-md-3">
            <form method="POST" action="<?= base_url('dashboard/getUserReport') ?>">
                <div class="form-group">
                    <label for="username_filter">Filter by Username:</label>
                    <select class="form-control" id="username_filter" name="username_filter">
                        <option value="">All</option>
                        <?php foreach ($user_details as $user) { ?>
                            <option value="<?= $user->id ?>"><?= $user->first_name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>
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
                    <th>Hotel Name</th>
                    <th>Amount</th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $totalPrice = 0;
                  foreach ($order_details as $key => $value) { 
                       $getBookinginfo = getBookinginfo($value->booking_id);
                      $getRoomName = getRoomName($getBookinginfo->room_id);
                       $orderPrice = $getBookinginfo->price;
                      $totalPrice += $orderPrice; // Add to total price
                   ?>
                  <tr>
                   <td><?php echo $value->id?></td>
                   <td><?php echo $value->first_name?></td>
                   <td><?php echo $getRoomName->hotel_name?></td>
                    <td>CHF <?=  number_format($getBookinginfo->price, 2, '.', '') ?></td>
                  </tr>
                <?php } ?>
                 
                  </tbody>
                  <tfoot>
                      <tr>
                          <th colspan="3" style="text-align: right;">Total Order Price:</th>
                          <th>CHF <?= number_format($totalPrice, 2, '.', '') ?></th>
                      </tr>
                  </tfoot>
                 
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
    $(document).ready(function() {
  $('#filter_option').change(function() {
    var filterValue = $(this).val();

    // Show or hide the custom date range based on the selected option
    if (filterValue == 'custom') {
      $('#custom_date_range').show();
    } else {
      $('#custom_date_range').hide();
    }
  });
});


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