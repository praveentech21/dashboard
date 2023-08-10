<?php
$con = new mysqli("localhost", "root", "", "montype");
$run1 = mysqli_query($con,"select * from winners order by score desc");
$run2 = mysqli_query($con,"select * from prizes order by score desc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRKR Campus Cafe</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Bhavani/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Bhavani/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="Bhavani/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="Bhavani/img/favicon.png" />
    <style>
      .banner-container {
        position: relative;
        height: 40vh;
        width: 100%;
        overflow: hidden;
      }
      .banner {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
      }
      .banner.active {
        opacity: 1;
      }
    </style>
  </head>
  <!-- Head End Shiva -->
  <!-- Body Started Shiva -->
  <body>
    <div class="container-scroller">

      <!-- Nav Bar Started Shiva -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="Bhavani/img/logo.png" alt="logo" /></a>
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
      <!-- Nav Bar Started Shiva -->

      <!-- Content Stared Shiva -->
      <div class="content-wrapper">
        
        <!-- Banner Started Shiva -->

        <div class="banner-container">
          <div class="banner" id="banner1">
            <img src="Bhavani/img/1.png" alt="Banner 1">
          </div>
          <div class="banner" id="banner2">
            <img src="Bhavani/img/2.png" alt="Banner 2">
          </div>
          <div class="banner" id="banner3">
            <img src="Bhavani/img/3.png" alt="Banner 3">
          </div>
        </div>

        <!-- Banner Ended Shiva -->

        <div class="page-header">
          <h3 class="page-title">Dashboard</h3>
        </div>
        <div class="row">

          <!-- Table One Started Shiav -->

          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Winners</h4>
                <p class="card-description"> Those who got <span style="color:red">Free Biriyani</span> </p>
                <table class="table">
                  <thead>
                    <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Points</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (mysqli_num_rows($run1) > 0) {
                        while ($row = mysqli_fetch_assoc($run1)) {
                            echo "<tr><td>" . $row["sname"] . "</td><td>".$row['dept']."</td><td>"  . $row["score"] . "</td></tr>";
                        }
                    } else {
                      echo "0 results";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- table One Ended Shiva -->

          <!-- Table Two Started Shiva -->

          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> Prizes </h4>
                <p class="card-description"> Those who got <span style="color:red">Discount</span>  </p>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Points </th>
                      <th>Discount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (mysqli_num_rows($run1) > 0) {
                        while ($row = mysqli_fetch_assoc($run2)) {
                          echo "<tr><td>" . $row["sname"] . "</td><td>" . $row["score"] . "</td><td>" . $row["disc"] . "</td></tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Table Two Ended -->

        </div>
      </div>

      <!-- Content End Shiva -->

      <!-- Fotter Started Shiva -->

      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © CSD SRKR 2023</span>
          <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Developed by  <a href="https://saipraveen.tech" target="_blank">Sai Praveen</a> SRKR CSD</span>
        </div>
      </footer>

      <!-- Fotterr End Shiva -->
      
    </div>
    <script>
      var banners = document.querySelectorAll('.banner');
      var currentBanner = 0;

      function changeBanner() {
        banners[currentBanner].classList.remove('active');
        currentBanner = (currentBanner + 1) % banners.length;
        banners[currentBanner].classList.add('active');
      }

      setInterval(changeBanner, 5000);

    </script>
  </body>
</html>