


function check(){

	if(isset($_REQUEST['click']))
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
}