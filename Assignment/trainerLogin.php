<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnews";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM trainer WHERE username='".$_POST['user']."' and password='".$_POST['pass']."'";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
$GLOBALS['user'] = $_POST['user'];
$GLOBALS['pass'] = $_POST['pass'];
if($num_rows==1){
	include ('trainerPage.php')
}else{
	echo "<meta http-equiv='refresh' content='0;url=index.php' />";
}
?>