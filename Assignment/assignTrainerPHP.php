<?php


if ($_POST['trainerName'] !="") {
    $trainerName = $_POST['trainerName'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbnews";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO trainerlist (trainerName) VALUES ('$trainerName')";
    $row = mysqli_query($conn, $sql);
}
header('location:assignTrainer.php')
?>