<!--
Here, we write code for registration.
-->
<?php

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: login.php");

}


require_once('connection.php');
$name = $email = $branch = $year = $password = $pwd = $enrno = '';

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$enrno = $_POST['enrno'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$password = MD5($pwd);

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address'); // Use your own error handling ;)
}

$select = mysqli_query($conn, "SELECT `enrno` FROM `users` WHERE `enrno` = '".$_POST['enrno']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    exit('This Enrollment no. is already registered');
}

$sql = "INSERT INTO users (name, email, branch, year, enrno, password) VALUES ('$name','$email','$branch','$year', '$enrno','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>