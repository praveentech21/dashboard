<?php
session_start();
if(empty($_SESSION['Regno'])){
  header("location:login.php"); 
}
else {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="container-scroller">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3 mt-3">
            <span class="font-weight-medium mb-2"><?php echo "{$_SESSION['name']}"; ?></span>
            <span class="font-weight-normal"><?php echo "{$_SESSION['Regno']}"; ?></span>
          </div>
          <!-- <span class="badge badge-danger text-white ml-3 rounded">3</span> -->
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="academic.html">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Academic</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="non.html">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">Non-Academic</span>
        </a>
      </li>
     
      
      <li class="nav-item">
        <span class="nav-link" href="#">
          <span class="menu-title">COUNSELLING FORMS</span>
        </span>
      </li>
      <li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-1 Form</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-2 Form</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-3 Form</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-4 Form</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-5 Form</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-6 Form</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-7 Form</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" >
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Sem-8 Form</span>
        </a>
      </li>

      <li class="nav-item sidebar-actions">
        <ul class="">
          <li>SIGN OUT</li>
        </ul>
      </li>

      
    </ul>
  </nav>


  <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      <!-- <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
        <i class="mdi mdi-menu"></i>
      </button> -->
      <ul class="navbar-nav">
<h3 class="align-self-center justify-content-center mt-1 text-white">STUDENT DASHBOARD</h3>
      </ul>
      <ul class="navbar-nav navbar-nav-right ml-lg-auto">
        <li class="nav-item nav-profile dropdown border-0">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
            <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
            <span class="profile-name"><?php echo "{$_SESSION['name']}"; ?></span>
          </a>
         
        </li>
      </ul>
      
    </div>
  </nav>

  <div class="container-fluid m-5 p-5">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title">WELOCME BACK, </h1>
          <!-- <p class="card-description">Basic form elements</p> -->
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Student Name</label>
              <input type="text" class="form-control" id="sdname" placeholder="Name" name="sdname"/>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Address For Communication</label>
              <textarea
                class="form-control"
                id="exampleTextarea1"
                rows="4"
              ></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Department</label>
              <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Registration No.</label>
              <input type="number" class="form-control" id="dregdno"  />
            </div>
            
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="img[]" class="file-upload-default" />
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">City</label>
              <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" />
            </div>
            
            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  
  </div>
  

</div>




</body>
</html>