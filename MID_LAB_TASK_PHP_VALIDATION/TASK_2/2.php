<?php 

	
	if(isset($_REQUEST['submit']))
	{   
		
		$email = $_REQUEST['email'];
		
		if($email == ""){
			echo "null value...";
		}

		else if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
          {
            echo '"' . $email . '" = Valid'."\n";
          }
        else 
          {
            echo '"' . $email . '" = Invalid'."\n";
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
						<input type="text" name="email" value="">
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