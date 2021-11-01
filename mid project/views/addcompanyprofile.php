<?php 
	include('../views/header.php');
?>

<html>
<head>
	<title>Add Company Profile</title>
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
	<form method="post" action="../controller/fileCheck.php">
		<fieldset>
			<legend>Add Company Profile</legend>
			<a href="../views/company.php">Back |</a>
			<a href="../controller/logout.php">Logout</a>
			<table width="40%" border="1" align="center">
				<tr align="center">
					<td>Logo</td>
					<td>
						<form method="POST" action="fileCheck.php" enctype="multipart/form-data">
		         <input type="file" name="myfile" value="">
		         
	          </form>
          </td>
				</tr>

				<tr>
					<td>Name</td>
					<td><input type="text" name="username" value=""></td>
				</tr>

				<tr>
					<td>Address</td>
					<td><textarea id="txt" name="txt" rows="10" cols="60"></textarea></td>
				</tr>

				<tr align="center">
						<td colspan="2" ><input type="submit" name="Submit" value="Submit"></td>
				</tr>
				

			</table>
		</fieldset>
	</form>
</div>

</body>
</html>