<?php 
	include('../views/header.php');
?>
<html>
<head>
	<title>Job Seekers List</title>
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

<div style="text-align:center;">
	<form method="post" action="../controller/logincheck.php">
		<fieldset>
			<legend>JOB SEEKERS LIST</legend>
			<a href="../views/job seekers.php">Back |</a>
			<a href="../controller/logout.php">Logout</a>
			<table align="center" >
				<tr>
					<td><input type="text" name="username" value=""></td>
					<td><input type="submit" name="submit" value="Search"></td>
				</tr>
			</table>
			<table width="40%" border="1" align="center">

				<tr style="background-color:#2ECC71" align="center">
					<th>ID</th>
					<th>USERNAME</th>
					<th>EMAIL</th>
					
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>001</td>
					<td>Efaj</td>
					<td>mohaimen02@gmail.com</td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>002</td>
					<td>Ejaj</td>
					<td>rahman03@gmail.com</td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>002</td>
					<td>Ejaj</td>
					<td>rahman03@gmail.com</td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>002</td>
					<td>Ejaj</td>
					<td>rahman03@gmail.com</td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>002</td>
					<td>Ejaj</td>
					<td>rahman03@gmail.com</td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
					<td>002</td>
					<td>Ejaj</td>
					<td>rahman03@gmail.com</td>
				</tr>

			</table>
		</fieldset>
	</form>
</div>

</body>
</html>