<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM books WHERE id=$id");

			$n = mysqli_fetch_array($record);
			$title = $n['title'];
            $author = $n['author'];
            $edition = $n['edition'];
			$status = $n['status'];
		

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Management</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM books"); ?>

<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
            <th>Edition</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
            <td><?php echo $row['edition']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td>
				<a href="crud.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
			</td>
			<td>
				<a href="crud.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
            
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Title</label>
		<input type="text" name="title" value="<?php echo $title; ?>">
	</div>
	<div class="input-group">
		<label>Author</label>
		<input type="text" name="author" value="<?php echo $author; ?>">
	</div>
    <div class="input-group">
		<label>Edition</label>
		<input type="text" name="edition" value="<?php echo $edition; ?>">
	</div>
	<div class="input-group">
		<label>Status</label>
		<input type="text" name="status" value="<?php echo $status; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save">Save</button>
		<?php endif ?>
	</div>
</form>
</body>
</html>