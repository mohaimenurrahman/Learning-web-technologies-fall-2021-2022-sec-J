<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Email Field </title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="myname" value="<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['degree'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>