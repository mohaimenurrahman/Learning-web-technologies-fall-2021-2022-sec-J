<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['bloodgroup'];
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
	<title>BloodGroup Field </title>
</head>
<body>	
	
	<form method="get" action="#">
		
		Blood Group
		<select name="bloodgroup"> 
			<option value="" selected="A+">A+ </option>

		</select>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>