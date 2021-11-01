<?php 
	include('../views/header.php');
?>

<html>
<head>
	<title>Post a job</title>
	<head>
	<title>Home</title>
	<style>
fieldset {
 background-color: #eeeeee;

  text-align:center;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 10px;
}
</style>
</head>
<body>
	

	<form method="post" action="../controller/jobcheck.php">

		<fieldset>
			<legend>POST A JOB</legend>

			<center>	
		      <a href="../views/job.php">Back </a> |
		      <a href="../controller/logout.php"> logout</a>
	        </center>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value=""></td>
				</tr>
				<tr>
					<td>Job Title</td>
					<td><input type="text" name="jobtitle" value=""></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="description" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>