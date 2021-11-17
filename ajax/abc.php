<?php 

    $host 	= "localhost";
	$dbname = 'webtech';
	$dbuser = 'root';
	$dbpassword = '';

	function getConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpassword;
		
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}


?>