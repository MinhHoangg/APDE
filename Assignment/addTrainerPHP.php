<?php
$usernames = $_POST['usernames'];
$passwords = $_POST['passwords'];
$trainerName = $_POST['trainerName'];
$degree = $_POST['degree'];
$phone = $_POST['phone'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnews";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO trainer (username, password, trainerName, degree, phone) VALUES ('$usernames', '$passwords', '$trainerName', '$degree', '$phone')";
$row = mysqli_query($conn, $sql);
header('location:adminPage.php');
?>