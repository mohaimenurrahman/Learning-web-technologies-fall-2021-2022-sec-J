<?php
	session_start();
	require_once('../model/productsModel.php');

	if(isset($_POST['submit'])){

		$pname 	= $_POST['pname'];
		$bprice 	= $_POST['bprice'];
		$sprice 		= $_POST['sprice'];

		if($_POST['pname'] != ""){
			if($_POST['bprice'] != ""){
				if($_POST['sprice'] != ""){


					$user = [
								'pname'=> $pname, 
								'bprice'=>$bprice, 
								'sprice'=> $sprice, 
								
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/home.php');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid sprice...";
				}	
			}else{
				echo "Invalid bprice...";
			}
		}else{
			echo "Invalid pname...";
		}
	}
?>