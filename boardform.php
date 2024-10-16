<?php include 'includes/header.php'?>

<body>
  <div class="container-scroller d-flex">

    <?php include 'includes/sidebar.php' ?>
    
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
    
    <?php include 'includes/navbar.php'?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <style>
              .card {
                margin: 0 auto;
                /* adjust the value as needed */
              }
            </style>
            <div class="row justify-content-center">
              <div class="col-md-6 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Impression Board Booking Form</h4>

                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Booking By</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Department">
                      </div>
                    
                      <div class="form-group">
                        <label>Attachment</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Start Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Start Date">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">End Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="End Date">
                      </div>
                   
                      <p class="card-description">
                        <i class="mdi mdi-arrow-down-drop-circle-outline"></i>
                        All artwork must be submitted before the 1st to confirm that the display items can reach the
                        outlet before the start of promotion or campaign. Example: Slot for Jan 24, artwork MUST submit
                        before 1st of December or End of November.
                      </p>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- content-wrapper ends -->

        
          <?php include 'includes/footer.php' ?>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>