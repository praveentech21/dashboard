<?php

include "link.php";
$run = mysqli_query($con,"select * from players where status=0");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRKR</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <div class="nav-profile-text">
                <p class="mb-1 text-black">SRKR CAMPUS CAFE</p>
              </div>
            </li>
          </ul>
        </div>
    </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">
                <span class="menu-title">Register Now</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="update.php">
                <span class="menu-title">Update</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Score</h4>
                  <?php
                          if (mysqli_num_rows($run) > 0) {
                            while ($row = mysqli_fetch_assoc($run)) {
                                echo '<form class="form-sample" method="post">';
                                echo '<p class="card-description">'.$row['sname'];
                                echo '<div class="row">'.'<div class="col-md-6">'.'<div class="form-group row">';
                                echo '<label class="col-sm-3 col-form-label">Speed</label>'.'<div class="col-sm-9">'.'<input type="text" class="form-control" name="speed" />';
                                echo '</div>'.'</div>'.'</div>';
                                echo '<div class="col-md-6">'.'<div class="form-group row">'.'<label class="col-sm-3 col-form-label">Accurecy</label>';
                                echo '<div class="col-sm-9">'.'<input type="text" class="form-control" name="accur" />';
                                echo '</div>'.'</div>'.'</div>'.'</div>';
                                echo '<button type="submit" name="submit"  class="btn btn-gradient-primary me-2">Submit</button>';
                                echo '</form>'.'<hr>';   
                                if(isset($_POST['submit'])){
                                    $speed = $_POST['speed'];
                                    $accur = $_POST['accur'];
                                    $reg = $row['regno']; 
                                    $sname = $row['sname'];
                                    $dept = $row['deptm'];
                                    if ($speed >= 45 and $accur >= 85) {
                                      $score = ($speed/60)*60 + ($accur/100)*40;
                                      $query = "insert into winners values ('$sname','$dept','$score')";
                                      $run = mysqli_query($con,$query);
                                      $run = mysqli_query($con,"update players set speed = $speed ,accur = $accur, status = 1 where regno ='$reg'");
                                    }
                                    else if($speed >= 25 and $accur >= 60){
                                      echo "Rama Rama Ragu Rama";
                                      $score = ($speed/60)*60 + ($accur/100)*40;
                                      $dis = $score/3;
                                      $query = "insert into prizes values ('$sname','$dept','$score',$dis)";
                                      $run = mysqli_query($con,$query);
                                      $run = mysqli_query($con,"update players set speed = $speed ,accur = $accur, status = 1 where regno ='$reg'");
                                    }                              
                                    }
                                }                        
                            }
                         else {
                            echo "0 results";
                        }
                        ?>                  
                </div>
                      <!-- </div> -->
                      <!-- </div> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>


              
            </div>
          </div>
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © CSD SRKR 2023</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Developed by  <a href="https://saipraveen.tech" target="_blank">Sai Praveen</a> SRKR CSD</span>
            </div>
         </footer>
          <!-- partial -->
        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>