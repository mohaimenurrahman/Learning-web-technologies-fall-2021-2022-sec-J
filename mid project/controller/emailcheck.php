<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['email'] != ""){
			if($_POST['subject'] != ""){
				if($_POST['description'] != ""){
					$myfile = fopen('../model/email.txt', 'a');
					$user = "Email Address: ".$_POST ['email']."  subject:".$_POST['subject']." Email Description: ".$_POST['description']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: ../views/success.php');
				}else{
					echo "Invalid email description...";
				}	
			}else{
				echo "Invalid subject...";
			}
		}else{
			echo "Invalid email address...";
		}
	}
?>