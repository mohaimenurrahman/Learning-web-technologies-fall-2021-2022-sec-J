<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['degree'];
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
	<title>Degree Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Degree</legend>

			<input type="checkbox" name="degree" value="">SSC
			<input type="checkbox" name="degree" value="">HSC
			<input type="checkbox" name="degree" value="">BSc
			<input type="checkbox" name="degree" value="">MSc
			
		</fieldset>
		<br>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>