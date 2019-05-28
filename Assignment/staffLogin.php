<?php
    	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dbnews";

		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM staff WHERE username='".$_POST['user']."' and password='".$_POST['pass']."'";
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);
		if($num_rows==1){
		echo "<meta http-equiv='refresh' content='0;url=staffPage.php' />";
		}else{
		echo "<meta http-equiv='refresh' content='0;url=index.php' />";
}
?>