<?php

if ($_POST['usernames'] !=""  && $_POST['passwords'] !="") {
    $usernames = $_POST['usernames'];
    $passwords = $_POST['passwords'];
    $encode = md5($passwords);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbnews";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO staff (username, password) VALUES ('$usernames', '$encode')";
    $row = mysqli_query($conn, $sql);
}
header('location: adminPage.php');
?>