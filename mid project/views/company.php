<?php 
	include('../views/header.php');
?>
<html>
<head>
	<title>Company</title>
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
			<legend>COMPANY PROFILE</legend>
			<a href="../views/home.php">Back |</a>
	    <a href="../controller/logout.php">Logout</a>
			<table width="40%" border="1" align="center">
			
					<tr align="center">
						<td colspan="2" >Company - 1</td>
				  </tr >
				  <tr align="center" >
					<td>Logo</td>
					<td><img src="../upload/company1.png" width="40%" height="40%" align="center"></td>
				</tr>

				<tr>
					<td>Name</td>
					<td>Job Dibo</td>
				</tr>

				<tr>
					<td>Address</td>
					<td>21/c,Uttara R/A,H-17/c, Dhaka</td>
				</tr>
				<tr align="center">
						<td colspan="2" >Company - 2</td>
				</tr>

				<tr align="center">
					<td>Logo</td>
					<td><img src="../upload/company2.jpg" width="40%" height="40%"></td>
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
						<td colspan="2" ><a href="../views/addcompanyprofile.php">Add  |</a><a href="../views/editcompanyprofile.php">Edit |</a><a href="../views/deletecompanyprofile.php"> Delete</a></td>
				</tr>
				

			</table>
		</fieldset>
	</form>
</div>

</body>
</html>