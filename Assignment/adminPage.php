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
   </style>
 </head>
 <body>
  <div class="header">
    <div><img src="img/logo.png"></div>
    <h1>Training System</h1>
  </div>
  <div class="topnav">
    <a href="adminPage.php">Home</a>
    <a href="courseAdmin.php">Course</a>
    <a href="topicAdmin.php">Topic</a>
    <a href="index.php">Logout</a>
    <div class="search">
      <form action="demoadmin.php" method="GET">
       <input type="text" placeholder="Search..." name="keyword" value="" size="50px">
       <input type="submit" name="Search" value="Search">
     </form>
   </div>
 </div>
</div>
<div>
  <table align="center" id="customers">
    <tr>
      <td align='center' width='200'>
        <table align="center" id="customers">
          <tr><th align='center' width='200' colspan="4">Staff Account</th></tr>
          <tr><th align='center' width='200'>ID</th><th align='center' width='200'>Username</th><th align='center' width='200'>Password</th><th align='center' width='200'>Update Account</th></tr>
        </table>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbnews";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT *  FROM staff";
        $result = mysqli_query($conn, $sql);
        echo "<table align='center' id='customers'>";
        while($row=mysqli_fetch_assoc($result)){
          echo "<td align='center' width='200'>" . $row['id'] . "</td>";
          echo "<td align='center' width='200'>" . $row['username'] . "</td>";
          echo "<td align='center' width='200'>" . $row['password'] . "</td>";
          echo "<td align='center' width='200'><form action='editStaff.php'>
          <button>Edit</button>
          </form></td>";
          echo "</tr>";}
          echo "</table>";?>
        </td>
        <td align='center' width='200'>
         <table align="center" id="customers">
          <tr><th align='center' width='200' colspan="4">Trainer Account</th></tr>
          <tr><th align='center' width='200'>ID</th><th align='center' width='200'>Username</th><th align='center' width='200'>Password</th><th align='center' width='200'>Update Account</th></tr>
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
          echo "<td align='center' width='200'>" . $row['id'] . "</td>";
          echo "<td align='center' width='200'>" . $row['username'] . "</td>";
          echo "<td align='center' width='200'>" . $row['password'] . "</td>";?>
          <td align="center" width="200"><button type='submit'><a href="editTrainer.php?id=<?php echo $row['id'] ?>">Edit</a></button></td>
          <?php
          echo "</tr>";}
          echo "</table>";?>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>