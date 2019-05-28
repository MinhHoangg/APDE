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
      .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
      }
      .button5 {
        background-color: white;
        color: black;
        border: 2px solid #555555;
      }

      .button5:hover {
        background-color: #555555;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <div><img src="img/logo.png"></div>
      <h1>Training System</h1>
    </div>
    <div class="topnav">
      <a href="#">Home</a>
      <a href="course.php">Course</a>
      <a href="topic.php">Topic</a>
      <a href="index.php">Logout</a>
      <div class="search">
        <form action="demostaff.php" method="GET">
          <input type="text" placeholder="Search..." name="keyword" value="" size="50px">
          <input type="submit" name="Search" value="Search">
        </form>
        
      </div>
    </div>
    <div align="center">
      <table>
        <tr>
          <td>
            <form action="assignTrainer.php">
              <button class="button button5">Assign Trainer</button>
            </form>
          </td>
          <td>
            <form action="deleteTrainer.php">
              <button class="button button5">Delete Trainer</button>
            </form>
          </td>
          <td>
            <form action="assign.php">
              <button class="button button5">Assign Trainee</button>
            </form>
          </td>
          <td>
            <form action="deleteTrainee.php">
              <button class="button button5">Delete Trainee</button>
            </form>
          </td>
          <td>
            <form action="addCT.php">
              <button class="button button5">Add Course/Topic</button>
            </form>
          </td>
          <td>
            <form action="deleteCT.php">
              <button class="button button5">Delete Course/Topic</button>
            </form>
          </td>
        </tr>
      </table>
    </div>
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
      $sql = "SELECT * FROM trainee";
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