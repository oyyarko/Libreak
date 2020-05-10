<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'libreak');

	// initialize variables
	$title = "";
    $author = "";
    $edition = "";
    $status = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$title = $_POST['title'];
        $author = $_POST['author'];
        $edition = $_POST['edition'];
		$status = $_POST['status'];

        $query = "INSERT INTO books (title, author, edition, status) VALUES ('$title', '$author', '$edition', '$status')";

		mysqli_query($db, $query); 
		$_SESSION['message'] = "Book saved"; 
		header('location: crud.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$author = $_POST['author'];
        $edition = $_POST['edition'];
        $status = $_POST['status'];
        
		mysqli_query($db, "UPDATE books SET title='$title', author='$author', edition='$edition', status='$status' WHERE id=$id");
		$_SESSION['message'] = "Book updated!"; 
		header('location: crud.php');
	}

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM books WHERE id=$id");
        $_SESSION['message'] = "Book deleted!"; 
        header('location: crud.php');
    }


	$results = mysqli_query($db, "SELECT * FROM books");


?>