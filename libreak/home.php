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
	</body>
	</html>
