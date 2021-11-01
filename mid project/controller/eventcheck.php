<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['event'] != ""){
			if($_POST['date'] != ""){
				if($_POST['description'] != ""){
					$myfile = fopen('../model/event.txt', 'a');
					$user = "Event Name: ".$_POST ['event']. "  Event Date:".$_POST['date']." Description: ".$_POST['description']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: ../views/success.php');
				}else{
					echo "Invalid  description...";
				}	
			}else{
				echo "Invalid event name...";
			}
		}else{
			echo "Invalid event date...";
		}
	}
?>