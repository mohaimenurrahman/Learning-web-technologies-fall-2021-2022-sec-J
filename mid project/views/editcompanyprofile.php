<?php 
	include('../views/header.php');
	session_start();
?>

<html>
<head>
	<title>Edit Company Profile</title>
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
	<form method="post" action="../controller/fileCheck.php.php">
		<fieldset>
			<legend>Edit Company Profile</legend>
			<a href="../views/company.php">Back |</a>
			<a href="../controller/logout.php">Logout</a>
			<table width="40%" border="1" align="center">
				<tr align="center">
					<td>Logo</td>
					<td><img src="upload/<?=$_SESSION['profile']?>" width="100px" height="100px"></td>
				</tr>

				<tr>
					<td>Name</td>
					<td>Job Portal</td>
				</tr>

				<tr>
					<td>Address</td>
					<td>12/d,Basundhara R/A,H-17/c, Dhaka</td>
				</tr>

				<tr align="center">
					
					<td colspan="2" ><input type="submit" name="submit" value="Edit"></td>
				</tr>
				

			</table>
		</fieldset>
	</form>
</div>

</body>
</htmlupload>