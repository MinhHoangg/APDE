<!DOCTYPE html>
<html>
<head>
	<title>Trainee Profile</title>
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
			<a href="staffPage.php">Home</a>
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
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "SELECT * FROM trainee WHERE id = '".$_GET['id']."'";
			$results = mysqli_query($conn, $sql);
		while($rows=mysqli_fetch_assoc($results)){
		?> 
		<tr>
			<td>Trainee name:</td>
			<td><?=$rows['name']?></td>
			<?php $name = $rows['name'];?>
		</tr>
		<tr>
			<td>Age:</td>
			<td><?=$rows['Age']?></td>
		</tr>
		<tr>
			<td>Education:</td>
			<td><?=$rows['education']?></td>
		</tr>
		<tr>
			<td>Programming language:</td>
			<td><?=$rows['ProgrammingLanguage']?></td>
		</tr>
		<tr>
			<td>
				<button type='submit'><a href="editTrainee.php?id=<?php echo $rows['id'] ?>"><img src="img/edit.png" height="15px" width="15px"></a></button>
			</td>
		</tr>
		<?php
	}
	?>
</table>
			