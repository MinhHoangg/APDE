<?php
if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbnews";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "DELETE FROM trainer WHERE id = '$id'";
	$row = mysqli_query($conn, $sql);
}
header('Location:adminPage.php');
?>
