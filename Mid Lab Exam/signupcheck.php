<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['id'] != ""){
			if($_POST['password'] != ""){
				if($_POST['Confirmed_password'] != ""){
					if($_POST['Name'] != ""){
						if($_POST['UserType'] != ""){


					$user = ['id'=> $_POST['id'], 'password'=> $_POST['password'], 'Confirmed_password'=> $_POST['Confirmed_password'], 'Name'=> $_POST['Name'],'UserType'=> $_POST['UserType']];
					$_SESSION['user'] = $user;
				
					header('location: login.html');
				}
			}
		}
		else{
			echo "Invalid UserType...";
		}
			else{
				echo "Invalid Name...";

			}


				else{
					echo "Invalid confirmed password...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid id...";
		}
	}
?>