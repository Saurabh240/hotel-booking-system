 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Property Highlight  List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Property Highlight List</li>
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
                <div class="col-md-3">
                  <a href="<?= base_url('dashboard/addPropertyHighlight')?>"><button type="button" class="btn btn-block bg-gradient-primary">Add Property Highlight </button></a>
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
                    <th>Property Highlight Name</th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($propertyHighlightData as $key => $value) { 
                    
                   ?>
                  <tr>
                   <td><?php echo $value->id?></td>
                    <td><?php echo $value->property_name?></td>
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