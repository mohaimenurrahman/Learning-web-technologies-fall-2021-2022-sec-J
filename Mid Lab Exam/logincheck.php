<?php
session_start();


function isCredCorrect($id, $password)
{
	$users = $_SESSION['users'];
	$n = count($users);

	for ($i = 0; $i < $n; ++$i) {
		if ($users[$i]['id'] == $id && $users[$i]['password'] == $password) {
			return true;
		}
	}
	return false;
}

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$password = $_POST['password'];

	if ($id != "") {
		if ($password != "") {

			if (isCredCorrect($id, $password)) {
				$_SESSION['flag'] = "true";
				header('location: home.php');
			} else {
				echo "invalid id/password";
			}
		} else {
			echo "Invalid password...";
		}
	} else {
		echo "Invalid id...";
	}
}