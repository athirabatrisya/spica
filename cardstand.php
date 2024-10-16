<?php include 'includes/header.php' ?>

<body>
  <div class="container-scroller d-flex">

    <?php include 'includes/sidebar.php'; ?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <?php include 'includes/navbar.php' ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


          <style>
            .container {
              display: grid;
              gap: 10px;
              grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
              /* Responsive grid */
              grid-column-gap: 25px;
              grid-row-gap: 25px;
              max-width: 90%;
              margin: 0 auto;

            }

            .container {
              width: 100%;
              height: 60%;
              border: 10px solid white;
              background: white;
              color: white;

            }


            .container>* {
              background-color: #000080;
              padding: 10px;
              border-radius: 10px;
              /* More rounded */
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center;

            }

            body {

              background-color: #30353b;
            }

            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
            }
          </style>

          <div class="container">
            <div class="item1">January <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item2">February <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item3">March <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item4">April <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item5">May <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item6">June <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item7">July <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item6">August <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item7">September <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item7">October <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item6">November <a class="nav-link" href="slotCardStand.php"></a></div>
            <div class="item7">December <a class="nav-link" href="slotCardStand.php"></a></div>
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