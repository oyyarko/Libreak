<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
require_once('connection.php');
session_start();
$enrno = $_SESSION['enrno'];
//$name = $_SESSION['name'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand"><img src="img/logo.png" height="30" width="100"></a>
			
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" style="background-color:#450fb1; border:None" data-toggle="dropdown"><?php echo $enrno;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="home.php">Home</a></li>  
 	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>