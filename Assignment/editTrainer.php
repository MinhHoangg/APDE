<!DOCTYPE html>
<head>
  <title>Insert Page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
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
      background-color: #DC143C;
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
        margin-top: 12px;
      }
      li {
        list-style: none;
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
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          -webkit-transition-duration: 0.4s;
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
    <body align = "center" background="img/pic.png">
      <div class="header">
        <div><img src="img/logo.png"></div>
        <h1>Training System</h1>
      </div>
      <div class="topnav">
        <a href="adminPage.php">Home</a>
        <a href="courseAdmin.php">Course</a>
        <a href="topicAdmin.php">Topic</a>
        <div class="search" class="topnav">
          <form action="demoadmin.php" method="GET">
            <input type="text" placeholder="Search..." name="keyword" value="" size="50px">
            <input type="submit" name="Search" value="Search">
          </form>
          
        </div>
      </div>
      <ul>
        <div>
          <h2>Update Trainer Account</h2>
        </div>

        <?php
        if (isset($_POST['id'])) 
        {
          $id = $_POST['id'];
          $usernames = $_POST['username'];
          $passwords = $_POST['password'];
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "dbnews";
          $conn = new mysqli($servername, $username, $password, $dbname);
          $sql = "UPDATE trainer SET username = '$usernames', password = '$passwords' WHERE id = '$id'";
          $row = mysqli_query($conn, $sql);
        }
        ?>
        <form class="w3-container" name="Insert" action="" method="POST">
          <p>
            <label>ID: <?php echo $_GET['id'] ?> </label>
            <input class="w3-input" type="hidden" value="<?php echo $_GET['id'] ?>" name="id"></p>
            <p>
              <label>Username: </label>
              <input class="w3-input" type="text" name="username"></p>
              <p>
                <label>Password: </label>
                <input class="w3-input" type="text" name="password"></p>
                <li><input type="submit" value="Update"></li>
              </form>
            </ul>
            <table align="center" id="customers">
              <tr><th align='center' width='200' colspan="4">Trainer Account</th></tr>
              <tr><th align='center' width='200'>ID</th><th align='center' width='200'>Username</th><th align='center' width='200'>Password</th></tr>
            </table>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbnews";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT *  FROM trainer";
            $result = mysqli_query($conn, $sql);
            echo "<table align='center' id='customers'>";
            while($row=mysqli_fetch_assoc($result)){
              echo "<form method= 'GET' action='editTrainer.php'>";
              echo "<td align='center' width='200'>" . $row['id'] . "</td>";
              echo "<td align='center' width='200'>" . $row['username'] . "</td>";
              echo "<td align='center' width='200'>" . $row['password'] . "</td>";
              echo "</tr>";}
              echo "</table>";?>
            </body>
            </html>