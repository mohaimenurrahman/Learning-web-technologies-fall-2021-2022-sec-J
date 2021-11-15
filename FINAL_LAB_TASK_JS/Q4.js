


function check(){

	
	if(isset($_REQUEST['click']))
	{
		$name = $_REQUEST['gender'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
}