<?php 

	require_once('../model/jobModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Job List</title>
	<style>

	.button {
  background-color: #4CAF50;
  border: 10;
  color: yellow;
  padding: 07px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   float: right;
}



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
	<form method="post" action="../controller/jobcheck.php">
		<fieldset>
			<div class="header">
      <h1>"JOB"</h1>
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

			<button class="button"><a href="home.php" >Back </a></button>
      <br>
      <br>
			<table border="1" align="center">
		<tr align="center" style="background-color:#1abc9c " >
			<th>ID</th>
			<th>COMPANY NAME</th>
			<th>JOB TITLE</th>
			<th>SALARY</th>
			<th>APPLY LAST DATE</th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['company_name']?></td>
			<td><?=$user['job_title']?></td>
			<td><?=$user['salary']?></td>
			<td><?=$user['date']?></td>
			<td>
				<a href="../views/addjob.php"> ADD</a> | 
				<a href="editjob.php?id=<?=$user['id']?>"> EDIT</a> | 
				<a href="deletejob.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>

	<br><br>
			<div style="text-align:center; font-size:20px;o "><a href="../views/about.html">About Us </a> | <a href="../views/companyprofile.php" > Terms of Service</a> | <a href="../views/information.html" > Contact Us</a></div>
			<p align="center" > © Copyright 2021 | Job Provider | All right reversed</p>
			
		

			
		</fieldset>
	</form>
</div>

	

	
</body>
</html>