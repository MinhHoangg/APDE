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
        <a href="courseTrainer.php">Course</a>
        <a href="topicTrainer.php">Topic</a>
        <a href="index.php">Logout</a>
        <div class="search" class="topnav">
          <form action="demoTrainer.php" method="GET">
            <input type="text" placeholder="Search..." name="keyword" value="" size="50px">
            <input type="submit" name="Search" value="Search">
          </form>
          
        </div>
      </div>
      <ul>
        <div>
          <h2>Update Profile Account</h2>
        </div>

        <form class="w3-container" name="Insert" action="editProfilePHP.php" method="POST">
          <p>
            <label>ID: <?php echo $_GET['id'] ?> </label>
            <input class="w3-input" type="hidden" value="<?php echo $_GET['id'] ?>" name="id"></p>
            <p>
              <label>Trainer Name: </label>
              <input class="w3-input" type="text" name="trainerName" required></p>
              <p>
                <label>Degree: </label>
                <input class="w3-input" type="text" name="degree" required></p>
                <p>
                  <label>Phone: </label>
                  <input class="w3-input" type="text" name="phone" required></p>
                  <li><button type="submit" onclick="myFunction()">Update</button></li>
                  <script>
                    function myFunction() {
                      alert('Login again to save changes!'); 
                      window.location.assign("index.php");               
                    }
                  </script>
                </form>
              </ul>

            </body>
            </html>