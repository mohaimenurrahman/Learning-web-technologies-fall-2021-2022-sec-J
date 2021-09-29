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
