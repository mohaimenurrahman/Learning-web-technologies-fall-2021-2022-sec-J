
function f2(){

	let name = document.getElementById('name').value;
	
	if(name != ""){
		document.getElementsByTagName('h1')[0].innerHTML = name;
		document.getElementById('d1').innerHTML = "";
	}else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}

function check(){

	
	if(isset($_REQUEST['click']))
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
}