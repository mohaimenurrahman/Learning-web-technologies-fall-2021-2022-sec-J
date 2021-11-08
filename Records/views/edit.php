<?php 
	include('header.php');
	require_once('../model/productsModel.php');

	$id = $_REQUEST['id'];
	$user = getUsersById($id);
	
?>

<html>
<head>
	<title>Edit</title>
</head>
<body>
	<center>	
		<a href="../controller/back.php"> Back</a>
	</center>

	<form method="post" action="../controller/productupdate.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="pname" value="<?=$user['Name']?>"></td>
				</tr>
				<tr>
					<td>Buying Price</td>
					<td><input type="bprice" name="bprice" value="<?=$user['Buying Price']?>"></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="sprice" name="sprice" value="<?=$user['Selling Price']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>