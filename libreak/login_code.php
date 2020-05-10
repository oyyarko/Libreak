<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$enrno = $password = $pwd = '';

$enrno = $_POST['enrno'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM users WHERE enrno='$enrno' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$enrno = $row["enrno"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['enrno'] = $enrno;
		
	}
	header("Location: home.php");
}
else
{
	echo "Invalid Enrollment no. or password";
}
?>