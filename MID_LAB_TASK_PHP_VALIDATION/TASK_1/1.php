<?php 

 
	
	if(isset($_REQUEST['submit']))
	{
	$alphas = array_merge(range('a', 'z'), range('A', 'Z'));
    $errors=array();
    $username = $_REQUEST['username'];
    echo $username[0];
    if (empty($username)){
        array_push($errors, "Cannot be empty <br>");
    }
    else if(!in_array($username[1],$alphas)){
        array_push($errors, "Contains at least two words <br>");
    }
    else if(!in_array($username[0],$alphas)){
        array_push($errors, "*Username must begin with a letter<br>");
    }else{
         echo "correct username";
         die;
    }

    print_r($errors);
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					<td>USERNAME</td>
					<td>
						<input type="text" name="username" value="">
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