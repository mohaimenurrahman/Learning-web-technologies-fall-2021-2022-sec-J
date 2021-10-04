<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['bloodgroup'];
		if($name == ""){
			echo "null...";
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
			<option value="A+" selected="A+">A+ </option>
			<option value="A-">A- </option>
			<option value="O+">O+ </option>
			<option value="O-">O- </option>
			<option value="AB+">AB+ </option>
			<option value="AB-">AB- </option>
			<option value="B+">B+ </option>
			<option value="B-">B- </option>

		</select>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>