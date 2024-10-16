<?php include 'includes/header.php' ?>
<body>
  <div class="container-scroller d-flex">

  
    <?php include 'includes/sidebar.php' ; ?>
    <!-- partial -->
     
    <div class="container-fluid page-body-wrapper">
     
  <?php include 'includes/navbar.php' ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          

        

          <style>
            .year-navigation{
              display: flex;
              justify-content: center;
              align-items: center;
              margin-bottom: 20px;
              text-align: center;
            }
            
       
            .year-nav-btn {
              background-color: #fff;
              border: 1px solid #ccc;
              padding: 8px 12px;
              border-radius: 50%;
              cursor: pointer;
              transition: background-color 0.3s ease, transform 0.2s;
            }

            .year-nav-btn:hover {
              background-color: #007bff;
              color: #fff;
              transform: scale(1.1);
            }

            .year-nav-btn:disabled {
              background-color: #f0f0f0;
              color: #bbb;
              cursor: not-allowed;
            }

            .year-text {
              margin: 0 15px;
              font-size: 1.5rem;
              font-weight: bold;
              color: #30353b;
            }
       
            .container {
              display: grid;
              gap: 10px;
              grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
              grid-column-gap: 25px;
              grid-row-gap: 25px;
              max-width: 90%;
              margin: 0 auto;
              
            }

            .container {
              width: 100%;
              height: 60%;
              border-radius: 10px;
              border: 10px solid white;
              background: white;
              color: white;
              
            }
            

            .container > * {
              background-color: #000080;
              padding: 10px;
              border-radius: 10px; /* More rounded */
              display: flex;
              justify-content:center;
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

<div class="year-navigation">
  <button id="prevBtn" class="btn btn-light year-nav-btn" disabled><i class="mdi mdi-chevron-left"></i></button>
  <h4 id="monthYear" class="year-text"></h4>
  <button id="nextBtn" class="btn btn-light year-nav-btn"><i class="mdi mdi-chevron-right"></i></button>
</div>

          <div class="container" >
              <div class="item1">January <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item2">February <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item3">March <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item4">April <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item5">May <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item6">June <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item7">July <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item6">August <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item7">September <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item7">October <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item6">November <a class="nav-link" href="slotcrowner.php"></a></div>
              <div class="item7">December <a class="nav-link" href="slotcrowner.php"></a></div>
          </div>

          <script>
          const monthYear = document.getElementById('monthYear');
          const prevBtn = document.getElementById('prevBtn');
          const nextBtn = document.getElementById('nextBtn');

          let currentDate = new Date();
          const minYear = 2000;  // Set a minimum year limit
          const maxYear = 2050;  // Set a maximum year limit

          function renderCalendar() {
            // Update the displayed year
            monthYear.innerText = currentDate.getFullYear();

            // Disable the Previous button if it's the minimum year
            prevBtn.disabled = currentDate.getFullYear() === minYear;

            // Disable the Next button if it's the maximum year
            nextBtn.disabled = currentDate.getFullYear() === maxYear;
          }

          // Handle Previous button click
          prevBtn.addEventListener('click', () => {
            if (currentDate.getFullYear() > minYear) {
              currentDate.setFullYear(currentDate.getFullYear() - 1);
              renderCalendar();
            }
          });

          // Handle Next button click
          nextBtn.addEventListener('click', () => {
            if (currentDate.getFullYear() < maxYear) {
              currentDate.setFullYear(currentDate.getFullYear() + 1);
              renderCalendar();
            }
          });

          // Initialize calendar on page load
          renderCalendar();

          </script>
       
  
      
        <!-- content-wrapper ends -->
               
        <?php include 'includes/footer.php'?>
        
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