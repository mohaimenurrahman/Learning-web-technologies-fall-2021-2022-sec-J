<?php 
	require_once('../model/productsModel.php');

	$pname 	= $_REQUEST['pname'];
	$bprice 	= $_REQUEST['bprice'];
	$sprice 		= $_REQUEST['sprice'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'pname'=>$pname, 'bprice'=>$bprice, 'sprice'=>$sprice];
	$status = editUser($user);

	if($status){
		header('location: ../views/display.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}

?>