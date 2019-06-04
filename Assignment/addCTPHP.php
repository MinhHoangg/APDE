<?php
if ($_POST['topicName'] !="" && $_POST['courseName'] != "") {
    $topicName = $_POST['topicName'];
    $courseName = $_POST['courseName'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbnews";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO topiclist (topicName, courseName) VALUES ('$topicName', '$courseName')";
    $row = mysqli_query($conn, $sql);
}
header('location:addCT.php');
?>