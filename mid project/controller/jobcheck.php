<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['companyname'] != ""){
			if($_POST['jobtitle'] != ""){
				if($_POST['description'] != ""){
					$myfile = fopen('../model/job.txt', 'a');
					$user = "  Company Name:".$_POST ['companyname']."  Job Title:".$_POST['jobtitle']." Job Description: ".$_POST['description']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: ../views/success.php');
				}else{
					echo "Invalid description...";
				}	
			}else{
				echo "Invalid jobtitle...";
			}
		}else{
			echo "Invalid companyname...";
		}
	}
?>