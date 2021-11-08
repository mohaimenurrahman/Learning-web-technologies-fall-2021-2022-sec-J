<?php 

	require_once('../model/productsModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Display</title>
</head>
<body>

	<center>	
		
		<a href="../controller/back.php"> Back</a>
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>BUYING PRICE</th>
			<th>SELLING PRICE</th>
			
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['Name']?></td>
			<td><?=$user['Buying Price']?></td>
			<td><?=$user['Selling Price']?></td>
			<td>
				<a href="edit.php?id=<?=$user['id']?>"> EDIT</a> | 
				<a href="delete.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>