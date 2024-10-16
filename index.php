<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VM</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">

    <!-- includes/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>

            <!-- Notification
            <div class="badge badge-info badge-pill">2</div>
-->
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="A3poster.php" >
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">A3 Poster</span>
          </a>
        </li>

        <!-- POP SIDEBAR
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">A3 Poster</span>
            <i class="menu-arrow"></i>
          </a>

           <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="A3poster.php">Buttons</a></li>
            </ul>
          </div> 
        </li>
        -->

        <li class="nav-item">
          <a class="nav-link" href="crowner.php">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Crowner</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="board.php">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Impression Board</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fin.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Magnetic Fin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cardstand.php">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Monitor Card Stand</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Others</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Settings</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="forgotpassword.php">Forget Password</a></li>
              <!-- login
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
-->
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/samples/logout.php">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Log out</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Form Application</p>
          <span></span>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="https://forms.gle/wvjpvY8sbjGpV2m19">
            <button class="btn bg-danger btn-sm menu-title">Google Form</button>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index.php"><img src="-" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="-" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, username</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block" id="currentDate"></h4>
            </li>

            <script>document.getElementById("currentDate").innerHTML=new Date().toLocaleDateString();</script>

            <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                
                <!--count notfication

                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
-->
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>

              <!-- notification count
                <span class="count bg-danger">1</span>
-->
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                <!-- new user registration
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
-->
                </a>
              </div>
            </li>
          </ul>

          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="-" alt="profile"/>
                <span class="nav-profile-name">Username</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <!--icon
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
-->
            <!--icon
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
-->
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-4 stretch-card mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center"></div>
                    <p class="mdi mdi-bell"></p>
                    <p class="card-title">Total Booking List</p>
                    <p class="text-success font-weight-medium">-</p>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="col-md-4 stretch-card mb-4"> 
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="card-title">Pending Task</p>
                    <p class="text-success font-weight-medium">-</p>
                  </div>
                 
                  
                </div>
              </div>
            </div>

            <div class="col-md-4 stretch-card mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="card-title">Completed Task</p>
                    <p class="text-success font-weight-medium">-</p>
                  </div>
                 
                </div>
              </div>
            </div>

            <!-- Calendar HTML Structure -->
            
            <div class="col-12 col-xl-8 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <button id="prevBtn" class="btn btn-light">
                          <i class="mdi mdi-chevron-left"></i>
                        </button>
                        <div class="monthYear" id="monthYear"></div>
                        <button id="nextBtn" class="btn btn-light">
                          <i class="mdi mdi-chevron-right"></i>
                        </button>
                      </div>
                      
                      <!-- Day Headers -->
                      <div class="days d-flex justify-content-between text-center mb-2">
                        <div class="day">Mon</div>
                        <div class="day">Tue</div>
                        <div class="day">Wed</div>
                        <div class="day">Thu</div>
                        <div class="day">Fri</div>
                        <div class="day">Sat</div>
                        <div class="day">Sun</div>
                      </div>

                      <!-- Calendar Dates -->
                      <div class="dates d-flex flex-wrap" id="dates"></div>
                    </div>
                  </div>
                </div>

                      <!-- Calendar CSS Styles -->
                    <style>
                      .days, .dates {
                        display: grid;
                        grid-template-columns:  repeat(7, 1fr); /*To ensure 7 columns*/
                        gap: 5px;
                      }

                      .days .day, .dates .date {
                        text-align: center;
                        box-sizing: border-box;
                        padding: 10px;
                        border-radius: 5px;
                        background-color: #f8f9fa;
                       
                      }

                      .dates .date {
                        cursor: pointer;
                      }

                      .dates .date:hover {
                        background-color: #ddd;
                      }
                    </style>

                    <!-- JavaScript for Calendar -->
                    <script>
                      const monthYear = document.getElementById('monthYear');
                      const datesContainer = document.getElementById('dates');
                      const prevBtn = document.getElementById('prevBtn');
                      const nextBtn = document.getElementById('nextBtn');

                      let currentDate = new Date();

                      function renderCalendar() {
                        const year = currentDate.getFullYear();
                        const month = currentDate.getMonth();

                        // Update Month and Year in Header
                        const options = { year: 'numeric', month: 'long' };
                        monthYear.innerText = currentDate.toLocaleDateString('en-US', options);

                        // Get the first and last day of the current month
                        const firstDay = new Date(year, month, 1).getDay();
                        const lastDate = new Date(year, month + 1, 0).getDate();

                        // Clear previous dates
                        datesContainer.innerHTML = '';

                        // Fill in the days before the 1st (for proper alignment)
                        for (let i = 1; i < (firstDay === 0 ? 7 : firstDay); i++) {
                          const emptyDiv = document.createElement('div');
                          emptyDiv.classList.add('date');
                          datesContainer.appendChild(emptyDiv);
                        }

                        // Fill in the current month's dates
                        for (let i = 1; i <= lastDate; i++) {
                          const dateDiv = document.createElement('div');
                          dateDiv.classList.add('date');
                          dateDiv.innerText = i;
                          datesContainer.appendChild(dateDiv);
                        }
                      }

                      // Handle Previous and Next Buttons
                      prevBtn.addEventListener('click', () => {
                        
                        currentDate.setMonth(currentDate.getMonth() - 1);
                        renderCalendar();
                      });

                      nextBtn.addEventListener('click', () => {
                        currentDate.setMonth(currentDate.getMonth() + 1);
                        renderCalendar();
                      });

                      // Initialize Calendar on Load
                      renderCalendar();
                    </script>  
                    </div>
                  </div>

                  <div class="col-md-4 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                          <p class="card-title">To Do List</p>
                          <p class="text-success font-weight-medium">-</p>
                        </div>
                       
                      </div>
                    </div>
                  </div>
     
                  
               
              </div>
          </div>
        </div>
          
      
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->
          <?php include 'includes/_footer.html'; ?>
        
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