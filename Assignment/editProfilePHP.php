<?php
if (isset($_POST['id'])) 
{
  $id = $_POST['id'];
  $trainerName = $_POST['trainerName'];
  $degree = $_POST['degree'];
  $phone = $_POST['phone'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbnews";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "UPDATE trainer SET trainerName = '$trainerName', degree = '$degree',phone = '$phone' WHERE id = '$id'";
  $row = mysqli_query($conn, $sql);
}
header("Location:trainerPage.php");
?>