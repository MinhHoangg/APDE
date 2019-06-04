 <?php
 if ($_POST['name'] !="" && $_POST['topicName'] !="" && $_POST['courseName'] != "" && $_POST['trainerName'] != "") {
  $name = $_POST['name'];
  $topicName = $_POST['topicName'];
  $courseName = $_POST['courseName'];
  $trainerName = $_POST['trainerName'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbnews";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "INSERT INTO trainee (name, topicName, courseName, trainerName) VALUES ('$name', '$topicName', '$courseName', '$trainerName')";
  $row = mysqli_query($conn, $sql);
}
header('Location: assign.php');
?>