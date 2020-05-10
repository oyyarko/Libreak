<!--
Into this file, we write a code for display user information.
-->

<?php
include_once('link.php');
include_once('header1.php');


$id = $_SESSION['id'];

if (!(isset($_SESSION['id']) && $_SESSION['id'] != '')) {

header ("Location: login.php");

}

$name = $email = $branch = $year = $enrno = '';
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$name = $row["name"];
		$email = $row["email"];
		$enrno = $row["enrno"];
		$branch = $row["branch"];
		$year = $row["year"];
	}
}


?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="img/user.svg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $name." ".$enrno; ?></span>
        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" style="background-color:#450fb1; border:None" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
            <tr>
          		<td>Enrollment no</td>
          		<td><?php echo $enrno; ?></td>
          	</tr>
          	<tr>
          		<td>Name</td>
          		<td><?php echo $name; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php echo $email; ?></td>
          	</tr>
          	<tr>
          		<td>Branch</td>
          		<td><?php echo $branch; ?></td>
          	</tr>
          	<tr>
          		<td>Year</td>
          		<td><?php echo $year; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
