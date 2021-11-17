

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JS EXAMPLE</title>
	
</head>
<body>
	<h1 id='h1'>THIS IS JS EXAMPLE</h1>
	<h1>Test</h1>

	<input type="button" name="click" value="Move Right" onclick="moveRight()">

	<div id="d1" style="width: 100px;height: 100px;position: relative;left: 5px;background: green;">
		
	</div>
	<br>

	<input type="text" id="name" name="name" value="" />
	<input type="button" name="click" value="Click" onclick="ajax()">

	<script type="text/javascript" src="script.js"></script>
	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>TYPE</th>
			
			
		</tr>

	<?php  
	    require_once('abc.php');
		$result =  getUsersById();
		while ($user = mysqli_fetch_assoc($result)) { 
	?> 
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['userame']?></td>
			<td><?=$user['email']?></td>
			<td><?=$user['type']?></td>
			
		</tr>
	<?php } ?>
	</table>







</body>

</html>