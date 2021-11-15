


function check(){

	
	
	if(isset($_REQUEST['click']))
	{
		$name = $_REQUEST['bloodgroup'];
		if($name == ""){
			echo "null...";
		}else{
			echo $name;
		}	
	}
}