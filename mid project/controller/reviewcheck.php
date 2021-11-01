<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['email'] != ""){
			if($_POST['name'] != ""){
				if($_POST['description'] != ""){
					$myfile = fopen('../model/review.txt', 'a');
					$user = "Officer Email: ".$_POST ['email']."  Officer Name:".$_POST['name']."Description: ".$_POST['description']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: ../views/success.php');
				}else{
					echo "Invalid email description...";
				}	
			}else{
				echo "Invalid name...";
			}
		}else{
			echo "Invalid email address...";
		}
	}
?>