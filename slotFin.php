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
              grid-template-rows: auto auto auto auto;
            }

            /* non-essential styles */

            .container {

              width: 90%;
              height: 60%;
              border-radius: 10px;
              /* More rounded */
              border: 100px solid white;
              background: white;
              color: white;
            }

            .container>* {
              background-color: #000080;
              border-radius: 10px;
              /* More rounded */
              padding: 10px;
            }

            < !-- WEBSITE LAYOUT-->body {

              background-color: #30353b;
            }

            /* To increase the background area {Increase padding/ margin} */

            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
            }

            /* Button new slot */

            .btn-primary {
              padding: 6px 40px;
              font-size: 12px;
              border-radius: 20px;
              display: block;
              margin: 0 auto;

            }

            .container {
              text-align: center;
            }

            .item i {
              margin-right: 5px;
              /* add some space between the icon and the text */
              margin-below: 0.05px;
            }
          </style>

          <div class="container">
            <button type="button" class="btn btn-primary btn-rounded btn-fw" id="addSlotBtn">
              <i class="mdi mdi-plus"></i>New Slot</button>

            <div class="item">
              <span class="mdi mdi-close-circle" onclick="deleteSlot(${slotCounter})"></span>

              <i class="mdi mdi-clipboard-text"></i> Slot 1
              <a class="nav-link" href="A3posterform.php"></a>
              <P class="card-description">Available</P>
            </div>
            <div class="item">
              <span class="mdi mdi-close-circle" onclick="deleteSlot(${slotCounter})"></span>

              <i class="mdi mdi-clipboard-text"></i> Slot 2
              <a class="nav-link" href="A3posterform.php"></a>
              <P class="card-description">Available</P>

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

  <script>
    let slotCounter = 4; // Start counting from Slot 4 since Slot 1,2,3 already exists

    document.getElementById('addSlotBtn').addEventListener('click', function () {
      const container = document.querySelector('.container');

      // Create a new div for the new slot
      const newSlot = document.createElement('div');
      newSlot.classList.add('item');
      newSlot.id = 'slot' + slotCounter;

      // Add slot content (icon, slot number, link, availability)
      newSlot.innerHTML = `
    <span class="mdi mdi-close-circle" onclick="deleteSlot(${slotCounter})"></span>

    <i class="mdi mdi-clipboard-text"></i> Slot ${slotCounter}
    <a class="nav-link" href="A3posterform.php"></a>
    <p class="card-description">Available</p>
    
  `;

      // Append the new slot to the mdi mdi-starcontainer
      container.appendChild(newSlot);

      slotCounter++; // Increment the counter for the next slot
    });

    function deleteSlot(slotId) {
      // Find the slot by its ID and remove it
      const slot = document.getElementById('slot' + slotId);
      if (slot) {
        slot.remove();
      }
    }
  </script>



</body>



</html>