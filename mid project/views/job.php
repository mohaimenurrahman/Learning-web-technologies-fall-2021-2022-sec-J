<?php 
	include('../views/header.php');
?>
<html>
<head>
	<title>Job</title>
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
			<legend>JOB</legend>
			<a href="../views/home.php">Back |</a>
			<a href="../controller/logout.php">Logout</a>
			<table width="40%" border="1" align="center">

				<tr style="background-color:#2ECC71" align="center">
						<td><a href="../views/postajob.php">Post a Job</a></td>
				</tr>
				<tr style="background-color:#2ECC71" align="center">
						<td><a href="../views/editpostedjob.php">Edit Posted Job</a></td>
				</tr style="background-color:#2ECC71">

				<tr style="background-color:#2ECC71" align="center">
						<td><a href="../views/deletepostedjob.php">Delete Posted Job</a></td>
				</tr>

				<tr style="background-color:#2ECC71" align="center">
						<td><a href="../views/jobsuggest.php">Suggest a Job</a></td>
				</tr>

			</table>
		</fieldset>
	</form>
</div>

</body>
</html>