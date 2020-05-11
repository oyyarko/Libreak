<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-md-6" for="name">Name:</label>
    <div class="row">
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" for="enrno">Enrollment no.:</label>
    <div class="row">
      <input type="text" name="enrno" class="form-control" id="enrno" placeholder="Enter Enrollment no." required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" name="branch">Branch:</label>
    <div class="row">
      <select name="branch">
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Electronics and Communication">Electronics and Communication</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Mechnical Engineering">Mechnical Engineering</option>
        <option value="Automobile Engineering">Automobile Engineering</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" name="year">Year:</label>
    <div class="row">
      <select name="year">
        <option value="1st">1st Year</option>
        <option value="2nd">2nd Year</option>
        <option value="3rd">3rd Year</option>
        <option value="4th">4th Year</option>
        <option value="Master">Masters</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" for="email">Email:</label>
    <div class="row">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" for="pwd">Password:</label>
    <div class="row"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Signup</button>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <p>Already have an Account! <a href="login.php">Login</a></p>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>