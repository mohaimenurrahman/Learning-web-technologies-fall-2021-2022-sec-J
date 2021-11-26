<?php 
	
	// require_once('header.php')
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<style>

h3 {
  background-color: black;
  color: white;
  
}

.header {
  padding:05px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}


.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
	
	
	<div style="text-align:center;">
	<form method="post" action="../controller/logincheck.php">
		<fieldset>
		
			<div class="header">
      <h1>WELCOME HOME!</h1>
      </div>

      <div class="topnav">
            <a class="active" href="../views/home.php">HOME</a>
            <a href="../views/userlist.php">JOB SEEKERS</a>
            <a href="../views/companyprofile.php">COMPANY</a>
            <a href="../views/joblist.php">JOB</a>
            <a href="../views/reviewlist.php">REVIEW</a>
            <a href="../views/eventlist.php">EVENT</a>
            <a href="../controller/logout.php">LOGOUT</a>
      </div>
			<img src="../picture/home.png" width="100%" height="100%">
			<br>
			<br><br>
			<div style="text-align:center; font-size:20px;o "><a href="../views/about.html">About Us </a> | <a href="../views/companyprofile.php" > Terms of Service</a> | <a href="../views/information.html" > Contact Us</a></div>
			<p align="center" > © Copyright 2021 | Job Provider | All right reversed.</p>
		</fieldset>
	</form>
</div>
</body>
</html>