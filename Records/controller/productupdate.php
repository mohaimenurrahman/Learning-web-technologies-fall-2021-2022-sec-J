<?php 
	require_once('../model/productsModel.php');

	$name 	= $_REQUEST['name'];
	$bprice 	= $_REQUEST['bprice'];
	$sprice 		= $_REQUEST['sprice'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'name'=>$name, 'bprice'=>$bprice, 'sprice'=>$sprice];
	$status = editUser($user);

	if($status){
		header('location: ../views/display.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}

?>