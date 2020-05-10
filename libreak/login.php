<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>
 <h1>User Login</h1>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

<form class="form-horizontal" method="POST" action="login_code.php">
 
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="enrno">Enrollment no:</label>
    <div class="col-sm-6">
      <input type="enrno" class="form-control" name="enrno" id="enrno" placeholder="Enter Enrollment no." required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" required> 
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>