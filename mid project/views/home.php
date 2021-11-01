<html>
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

<div style="text-align:center;">
	<form method="post" action="../controller/logincheck.php">
		<fieldset>
			<legend>HOME</legend>

			<div style="text-align:right;"><a href="../controller/logout.php" >Logout</a></div>

			<img src="../upload/home.png" height="80%" height="100%">
			<table width="34%" border="1" align="center">
				

				<tr align="center" style="background-color:#2ECC71 ">

					<td ><a href="../views/job seekers.php">Job seekers</a></td>
				</tr>
				<tr align="center" style="background-color:#2ECC71">
					<td><a href="../views/company.php">Company</a></td>
				</tr>

				<tr align="center" style="background-color:#2ECC71">
					<td><a href="../views/job.php">Job</a></td>
				</tr>

				<tr align="center" style="background-color:#2ECC71">
					<td><a href="../views/review.php">Review</a></td>
				</tr>

				<tr align="center" style="background-color:#2ECC71">
					<td><a href="../views/event.php">Event</a></td>
				</tr>

				
			</table>
		</fieldset>
	</form>
</div>

</body>
</html>