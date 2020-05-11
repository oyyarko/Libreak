<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
  
<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');


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


    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Libreak</h1>
          <p style="text-align:center">This is a simple web app to Renew borrowed books from the Library.</p>
          <p style="text-align:center"><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-12">
        <h1 class="display-3">Developed & Designed By</h1>
        </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>Arvina Kori</h2>
            <p>170160107046</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
          <h2>Ravi Kaliya</h2>
            <p>170160107036</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
          <h2>Arpi Kothari</h2>
            <p>170160107047</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
          
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
