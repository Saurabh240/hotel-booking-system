 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category  List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Category List</li>
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
                <div class="col-md-2">
                  <a href="<?= base_url('dashboard/addCategory')?>"><button type="button" class="btn btn-block bg-gradient-primary">Add Category </button></a>
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
                    <th>Category Name</th>
                    <th>Action</th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($categoryData as $key => $value) { 
                    
                   ?>
                  <tr>
                   <td><?php echo $value->id?></td>
                    <td><?php echo $value->category_name?></td>
                     <td style="width:100px">
                        <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-pencil"></i></a>

                         <a data-title="Delete" data-toggle="modal" data-target="#myModal<?php echo $value->id; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>

                    </td>
                  </tr>
                   <div id="myModal<?php echo $value->id; ?>" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Delete</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <div class="modal-body">
                              <p>Are you sure want to delete? </p>
                           </div>
                           <div class="modal-footer">
                              <a  href="javascript:void(0)" class="btn btn-default"  >Yes</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                           </div>
                        </div>
                     </div>
                  </div>
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