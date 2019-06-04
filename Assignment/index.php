<!DOCTYPE html>
<html>
<head>
	<title>Training System</title>
	<meta charset="utf-8">
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
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    .container {
      padding: 16px;
    }

    span.pass {
      float: right;
      padding-top: 16px;
    }
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.4);
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; 
      border: 1px solid #888;
      width: 60%; 
    }

    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
    
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
     }
     .cancelbtn {
       width: 100%;

     }
   }
   .button {
     background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 12px 20px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 12px;
     margin: 3px 1.5px;
     -webkit-transition-duration: 0.4s; /* Safari */
     transition-duration: 0.4s;
     cursor: pointer;
   }
   body {font-family: Arial, Helvetica, sans-serif;}
 </style>
</head>
<body>
	<div class="header">
		<div><img src="img/logo.png"></div>
		<h1>Training System</h1>
	</div>
	<div class="topnav">
		<a href="#" onclick="myFunction()">Home</a>
    <a href="#" onclick="myFunction()">Course</a>
    <a href="#" onclick="myFunction()">Topic</a>
  </div>
  <script>
    function myFunction() {
      alert("You must to login first!");
    }
  </script>
  <div><h2 align="center">You are login as: </h2></div>
  <div>
   <table align="center">
    <tr>
     <td>
       <div><button class="button button5" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Administrator</button></div>
       <div id="id01" class="modal">
        
         <form class="modal-content animate" action="adminLogin.php" method="POST">
          <div class="container">
            <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" required>

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            
            <button type="submit" class="button button5">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
          <div class="container" style="background-color:#f1f1f1" align="center">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
    </td>
    <td>
     <div><button class="button button5" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Training Staff</button></div>
     <div id="id02" class="modal">
      
       <form class="modal-content animate" action="staffLogin.php" method="POST">
        <div class="container">
          <label for="user"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>

          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
          
          <button type="submit" class="button button5">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
        <div class="container" style="background-color:#f1f1f1" align="center">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </td>
  <td>
   <div><button class="button button5" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Trainer</button></div>
   <div id="id03" class="modal">
    
     <form class="modal-content animate" action="trainerPage.php" method="POST">
      <div class="container">
        <label for="user"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        
        <button type="submit" class="button button5">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <div class="container" style="background-color:#f1f1f1" align="center">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
</td>
</tr>
</table>
<script>
  var modal = document.getElementById('id01');

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
</div>
</body>
</html>