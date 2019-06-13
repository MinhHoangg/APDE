<!DOCTYPE html>
<html>
<head>
	<title>Trainer Page</title>
	<style type="text/css">
		.header {
			background-color: #F1F1F1;
			text-align: center;
			padding: 20px;
		}
		.topnav {
			overflow: hidden;
			background-color: #333;
		}
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th {
			border: 1px solid #FFFFFF;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #333;
			color: white;}
			.topnav a {
				float: left;
				display: block;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			.topnav a:hover {
				background-color: #ddd;
				color: black;
			}
			.search{
				float: right;
				margin: center;
				margin-top: 12px;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<div><img src="img/logo.png"></div>
			<h1>Training System</h1>
		</div>
		<div class="topnav">
			<a href="courseTrainer.php">Course</a>
			<a href="topicTrainer.php">Topic</a>
			<a href="index.php">Logout</a>
			<div class="search">
				<form action="demo.php" method="GET">
					<input type="text" placeholder="Search..." name="keyword" value="" size="50px">
					<input type="submit" name="Search" value="Search">
				</form>
				
			</div>
		</div>
		<table align="center">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dbnews";

			$conn1 = new mysqli($servername, $username, $password, $dbname);
			$encode = md5($_POST['pass']);
			$sql1 = "SELECT * FROM trainer WHERE username='".$_POST['user']."' and password='".$encode."'";
			$results = mysqli_query($conn1, $sql1);
			$num_rows = mysqli_num_rows($results);
			if($num_rows!=1){
			header("location:index.php");
		}
		while($rows=mysqli_fetch_assoc($results)){
		?> 
		<tr>
			<td>Trainer name:</td>
			<td><?=$rows['trainerName']?></td>
			<?php $trainerName = $rows['trainerName'];?>
		</tr>
		<tr>
			<td>Education:</td>
			<td><?=$rows['degree']?></td>
		</tr>
		<tr>
			<td>Telephone:</td>
			<td><?=$rows['phone']?></td>
		</tr>
		<tr>
			<td>
				<button type='submit'><a href="editProfile.php?id=<?php echo $rows['id'] ?>"><img src="img/edit.png" height="15px" width="15px"></a></button>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<div>
	<table align="center" id="customers">
		<tr><th align='center' width='200'>ID</th><th align='center' width='200'>Trainee Name</th><th align='center' width='200'>Topic</th><th align='center' width='200'>Course</th><th align='center' width='200'>Trainer Name</th></tr>
	</table>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbnews";

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM trainee WHERE trainerName = '$trainerName'";
	$result = mysqli_query($conn, $sql);
	echo "<table align='center' id='customers'>";
		while($row=mysqli_fetch_assoc($result)){
		echo "<td align='center' width='200'>" . $row['id'] . "</td>";
		echo "<td align='center' width='200'>" . $row['name'] . "</td>";
		echo "<td align='center' width='200'>" . $row['topicName'] . "</td>";
		echo "<td align='center' width='200'>" . $row['courseName'] . "</td>";
		echo "<td align='center' width='200'>" . $row['trainerName'] . "</td>";
	echo "</tr>";}
echo "</table>";?>

</div>
</body>
</html>