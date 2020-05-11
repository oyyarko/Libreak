<!--
Into this file, we create a layout for welcome page.
-->

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
<html>
	<head>
		<title>Libreak</title>
		
		<style>
			body {
				font-size: 19px;
				font-family: "Roboto", sans-serif;
			}
			.footer {
				margin-top:100px;
				padding:50px;
				position: inline;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: #450fb1;;
				color: white;
				text-align: center;
				}

			table {
				width: 50%;
				margin: 10px auto;
				padding: 10px auto;
				border-collapse: collapse;
				text-align: left;
			}

			tr {
				border-bottom: 1px solid #cbcbcb;
			}

			th,
			td {
				border: none;
				height: 50px;
				padding: 10px;
			}
			thead, thead:hover {
				background:#450fb1;
				color: white;
			}

			.trtable:hover {
				background: #F5F5F5;
			}

			#header-book {
				color: #333;
				font-family: Georgia, 'Times New Roman', Times, serif;
			}
		
			</style>
</head>
<body>
<div class="row">
	<center>
		<h3 style="color:#450fb1">Welcome <?php echo $name ?></h3>
	</center>
</div>
<center>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 id='header-book'>Library Books</h2>
                    </div>
<?php $results = mysqli_query($conn, "SELECT * FROM books"); ?>

<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
            <th>Edition</th>
			<th>Status</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr class='trtable'>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
            <td><?php echo $row['edition']; ?></td>
			<td><?php echo $row['status']; ?></td>
            
		</tr>
	<?php } ?>
</table>
				</div>
				</div>
				</div>
				</div>
	</center>
	<div class="footer">
	<h2>Libreak</br>Renew Books from your phone</br></br><h3> © Developed & Designed By</h3></h2>
	

<div class="container">
  <div class="grid">
    <div class="col-sm-4">
	<h3>Arvina Kori</h3>
	  <h4>170160107046</h4>
    </div>
    <div class="col-sm-4">
	<h3>Ravindra Kaliya</h3>
	  <h4>170160107036</h4>
    </div>
    <div class="col-sm-4">
	<h3>Arpi Kothari</h3>
	  <h4>170160107047</h4>
    </div>
  </div>
</div>
	</div>
	</body>
	</html>
