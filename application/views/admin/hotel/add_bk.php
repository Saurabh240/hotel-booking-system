  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Add Hotel</li>
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
               <form role="form" action="<?php echo base_url(); ?>Dashboard/saveHotel" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <select class="form-control" name="category_name">
                             
                           
                            <?php 
                              foreach ($categoryData as $key => $value) { ?>
                                 <option value="<?= $value->id?>"><?= $value->category_name?></option>
                             <?php }
                            ?>
                             </select>
                           
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Hotel Name</label>
                            <input type="text" name="hotel_name" required class="form-control" id="exampleInputEmail1" placeholder="Enter hotel name">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                           <select class="form-control" name="country">
                             
                           
                            <?php 
                              foreach ($countryData as $key => $value) { ?>
                                 <option value="<?= $value->id?>"><?= $value->name?></option>
                             <?php }
                            ?>
                             </select>
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">State</label>
                            <select class="form-control" name="state">
                             
                           
                            <?php 
                              foreach ($stateData as $key => $value) { ?>
                                 <option value="<?= $value->id?>"><?= $value->name?></option>
                             <?php }
                            ?>
                             </select>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                           <select class="form-control" name="city">
                             
                           
                            <?php 
                              foreach ($cityData as $key => $value) { ?>
                                 <option value="<?= $value->id?>"><?= $value->name?></option>
                             <?php }
                            ?>
                             </select>
                          </div>
                      </div>
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Guests</label>
                            <input type="number" name="guests" required class="form-control" id="exampleInputEmail1" placeholder="Enter guests">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Bedrooms</label>
                            <input type="number" name="bedrooms" required class="form-control" id="exampleInputEmail1" placeholder="Enter bedrooms">
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Beds</label>
                            <input type="number" name="beds" required class="form-control" id="exampleInputEmail1" placeholder="Enter beds">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                     
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Bathrooms</label>
                            <input type="number" name="bathrooms" required class="form-control" id="exampleInputEmail1" placeholder="Enter bathrooms">
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Rating</label>
                            <input type="number" name="rating" required class="form-control" id="exampleInputEmail1" placeholder="Enter rating">
                          </div>
                      </div>
                  </div>

                   <div class="col-md-12">
                     
                      <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" name="price" required class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="hotel_image" required class="form-control" id="exampleInputEmail1" placeholder="Enter  image">
                          </div>
                      </div>
                  </div>

                    <div class="col-md-12">
                     
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                           <select class="form-control" name="status">
                             <option value="1">Active</option>
                             <option value="2">InActive</option>
                           </select>
                          </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" name="location"  class="form-control" id="exampleInputEmail1" placeholder="Enter center website link">
                          </div>
                      </div>
                     
                  </div>

                  
                   <div class="col-md-12">
                      <div class="col-md-12 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                             <textarea id="summernote" name="descption">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                              </textarea>
                          
                          </div>
                      </div>
                       
                  </div>
                   <div class="col-md-12">
                          <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="images">Upload Gallery Images:</label>
                            <input type="file" name="gallery_images[]"  class="form-control" id="images" multiple>
                            </div>
                      </div>
                       <div class="col-md-6 blood_center_section">
                           <div class="form-group">
                            <label for="exampleInputEmail1">Discount</label>
                            <input type="text" name="discount"  class="form-control" id="exampleInputEmail1" placeholder="Enter discount">
                          </div>
                      </div>
                  </div>


                  <div class="col-md-12">
                      <div class="col-md-12 blood_center_section">
                           <div class="form-group">
                            <label for="images">Property Highlights:</label>

                              <div class="checkbox-group">
                                <?php foreach ($propertyHighlightData as $key => $value) { ?>
                                    <label class="checkbox-wrapper">
                                        <?= $value->property_name?>
                                        <input type="checkbox" name="highlights[]" value="<?= $value->id?>">
                                        <span class="checkbox-custom"></span>
                                    </label>    
                                <?php } ?>
                                
                            </div>
                            
                            </div>
                      </div>
                  </div>


                    <div class="col-md-12">
                         <h2 class="text-center mb-4">Hotel Room Availability</h2>
                        <div id="availabilityContainer"></div>
                        <button type="button" id="addRowBtn" class="btn btn-primary">+ Add Room</button>
                    </div>
     

                 
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create Hotel</button>
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

  <style type="text/css">
      
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-wrapper {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 16px;
            user-select: none;
        }

        .checkbox-wrapper input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-custom {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #ddd;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .checkbox-wrapper:hover input ~ .checkbox-custom {
            background-color: #ccc;
        }

        .checkbox-wrapper input:checked ~ .checkbox-custom {
            background-color: #007bff;
            border: 2px solid #0056b3;
        }

        .checkbox-custom::after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-wrapper input:checked ~ .checkbox-custom::after {
            display: block;
        }
         .row-container {
            margin-bottom: 15px;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .remove-row {
            color: #fff;
            cursor: pointer;
        }
       
  </style>
  <!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        let rowCount = 0;

        // Function to add a new row
        function addRow() {
            rowCount++;
            const row = `
            <div class="row-container" id="row-${rowCount}">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="room_name_${rowCount}">Room Name</label>
                        <input type="text" class="form-control" name="room_name[]" id="room_name_${rowCount}" placeholder="Enter room name">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="room_size_${rowCount}">Room Size</label>
                        <input type="text" class="form-control" name="room_size[]" id="room_size_${rowCount}" placeholder="e.g., 20m²">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="description_${rowCount}">Description</label>
                        <textarea class="form-control" name="description[]" id="description_${rowCount}" rows="2" placeholder="Enter room description"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Image Gallery</label>
                        <input type="file" class="form-control-file" name="images_${rowCount}[]" multiple>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Facilities</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="facilities_${rowCount}[]" value="WiFi" id="wifi_${rowCount}">
                            <label class="form-check-label" for="wifi_${rowCount}">WiFi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="facilities_${rowCount}[]" value="TV" id="tv_${rowCount}">
                            <label class="form-check-label" for="tv_${rowCount}">TV</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="facilities_${rowCount}[]" value="Air Conditioning" id="ac_${rowCount}">
                            <label class="form-check-label" for="ac_${rowCount}">Air Conditioning</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price_${rowCount}">Price (per night)</label>
                        <input type="number" class="form-control" name="price[]" id="price_${rowCount}" placeholder="Enter price">
                    </div>
                    <div class="form-group col-md-3 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-row" data-id="${rowCount}">- Remove</button>
                    </div>
                </div>
            </div>`;
            $('#availabilityContainer').append(row);
        }

        // Add the first row on page load
        addRow();

        // Add new row on button click
        $('#addRowBtn').on('click', function () {
            addRow();
        });

        // Remove a row
        $(document).on('click', '.remove-row', function () {
            const rowId = $(this).data('id');
            $(`#row-${rowId}`).remove();
        });
    });
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>