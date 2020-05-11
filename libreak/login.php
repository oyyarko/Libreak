<!--
Into this file, we create a layout for login page.
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
            
                <div class="col-md-12"><h1>User Login</h1>

<form class="form-horizontal" method="POST" action="login_code.php">
 
	
  <div class="form-group">
    <label class="control-label col-md-6" for="enrno">Enrollment no:</label>
    <div class="row">
      <input type="enrno" class="form-control" name="enrno" id="enrno" placeholder="Enter Enrollment no." required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-6" for="pwd">Password:</label>
    <div class="row"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" required> 
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <p>Don't have an Account! <a href="registration.php">Register</a></p>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>