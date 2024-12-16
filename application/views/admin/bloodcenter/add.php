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
               <form role="form" action="<?php echo base_url(); ?>Dashboard/saveBloodCenter" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Name</label>
                            <input type="text" name="center_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter center name">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Address</label>
                            <input type="text" name="center_address" required class="form-control" id="exampleInputEmail1" placeholder="Enter center address">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center State</label>
                            <input type="text" name="center_state" required class="form-control" id="exampleInputEmail1" placeholder="Enter center state">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center City</label>
                            <input type="text" name="center_city" required class="form-control" id="exampleInputEmail1" placeholder="Enter center city">
                          </div>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Pincode</label>
                            <input type="number" name="center_pincode" required class="form-control" id="exampleInputEmail1" placeholder="Enter center pincode">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center lat</label>
                            <input type="text" name="center_lat" required class="form-control" id="exampleInputEmail1" placeholder="Enter center lat">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Long</label>
                            <input type="text" name="center_long" required class="form-control" id="exampleInputEmail1" placeholder="Enter center long">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Email</label>
                            <input type="email" name="center_email" required class="form-control" id="exampleInputEmail1" placeholder="Enter center email">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Phone Number</label>
                            <input type="number" name="center_phonenumber" required class="form-control" id="exampleInputEmail1" placeholder="Enter center phonenumber">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Emergency Phone Number</label>
                            <input type="number" name="center_emg_phonenumber" required class="form-control" id="exampleInputEmail1" placeholder="Enter center emergency phone number">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Location Map</label>
                            <input type="text" name="center_location_map" required class="form-control" id="exampleInputEmail1" placeholder="Enter center location map">
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Rating</label>
                            <input type="text" name="center_rating" required class="form-control" id="exampleInputEmail1" placeholder="Enter center rating">
                          </div>
                      </div>
                  </div>

                    <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Image</label>
                            <input type="file" name="center_image" required class="form-control" id="exampleInputEmail1" placeholder="Enter center image">
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Status</label>
                           <select class="form-control" name="status">
                             <option value="1">Active</option>
                             <option value="2">InActive</option>
                           </select>
                          </div>
                      </div>
                     
                  </div>

                   <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Center Website Link</label>
                            <input type="text" name="center_website"  class="form-control" id="exampleInputEmail1" placeholder="Enter center website link">
                          </div>
                      </div>
                       
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Center</button>
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