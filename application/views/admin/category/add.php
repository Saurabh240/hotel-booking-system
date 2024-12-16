  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blood Center</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Add Blood Center</li>
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
               <form role="form" action="<?php echo base_url(); ?>Dashboard/saveCategoryCenter" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" name="category_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Category Status</label>
                           <select class="form-control" name="status">
                             <option value="1">Active</option>
                             <option value="2">InActive</option>
                           </select>
                          </div>
                      </div>
                     
                  </div>
                 </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Category</button>
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