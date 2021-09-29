<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['gender'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gender Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Gender</legend>

			<input type="radio" name="gender" value="">Male
			<input type="radio" name="gender" value="">female
			<input type="radio" name="gender" value="">Others
			<input type="submit" name="submit" value="Submit">
		</fieldset><br>
		
	</form>
</body>
</html>