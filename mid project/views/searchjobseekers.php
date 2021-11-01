<?php 
	include('../views/header.php');
?>
<html>
<head>
	<title>Search</title>
	<style>
fieldset {
  background-color: #eeeeee;
  width:70px ;
  text-align:center;
 
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
  width:80px;

}

input {
  margin: 10px;
}
</style>
</head>
<body>
	
	<form method="post" action="../controller/logincheck.php">
		<fieldset>
			<legend>SEARCH</legend>
			<a href="../views/job seekers.php">Back |</a>
			<a href="../controller/logout.php">Logout</a>
			<table>
				<tr>
					<td><input type="text" name="username" value=""></td>
					<td><input type="submit" name="submit" value="Search"></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>