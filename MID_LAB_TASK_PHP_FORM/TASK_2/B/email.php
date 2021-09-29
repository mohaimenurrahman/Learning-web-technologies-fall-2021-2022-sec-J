<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myemail'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $email;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>email Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Email</legend>
			<table>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="myemail" value="">
					</td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>