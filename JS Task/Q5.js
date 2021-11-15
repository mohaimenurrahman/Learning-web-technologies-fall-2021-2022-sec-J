


function check(){

	
	
	if(isset($_REQUEST['click']))
	{
		$name = $_REQUEST['degree'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
}