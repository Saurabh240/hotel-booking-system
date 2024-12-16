  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Property Highlight</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Add Property Highlight</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action="<?php echo base_url(); ?>Dashboard/saveProperty" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Property Highlight Name</label>
                            <input type="text" name="property_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter Property name">
                          </div>
                      </div>
                     
                     
                  </div>
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Property Highlight</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->