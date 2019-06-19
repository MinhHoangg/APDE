<?php
if (isset($_POST['id'])) 
{
  $id = $_POST['id'];
  $trainerName = $_POST['traineeName'];
  $Age = $_POST['Age'];
  $education = $_POST['education'];
  $PL = $_POST['ProgrammingLanguage'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbnews";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "UPDATE trainee SET name = '$trainerName', Age = '$Age',education = '$education', ProgrammingLanguage = '$PL'  WHERE id = '$id'";
  $row = mysqli_query($conn, $sql);
}
header("Location:staffPage.php");
?>