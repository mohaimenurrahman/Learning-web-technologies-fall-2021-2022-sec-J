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
