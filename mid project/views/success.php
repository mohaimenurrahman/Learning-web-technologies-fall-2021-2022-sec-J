<?php 
	include('../views/header.php');
?>
<html>
<head>
	<title>Done</title>
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
			<legend></legend>
			<a href="../views/home.php">Back |</a>
			<a href="../controller/logout.php">Logout</a><br>
			<h1>Sucessfully Done....!</h1>
			
			
		</fieldset>
	</form>
</div>

</body>
</html>