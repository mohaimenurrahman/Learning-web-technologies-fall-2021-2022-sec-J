<?php 
	include('header.php');
?>

<html>
<head>
	<title>Suggested job</title>
	<style>
fieldset {
 background-color: #eeeeee;

  text-align:center;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 10px;
}
</style>
</head>
<body>
	

	<form method="post" action="../controller/jobcheck.php">
		<fieldset>
			<legend>Suggested JOB</legend>
			<center>	
		          <a href="../views/job.php">Back </a> |
		           <a href="../controller/logout.php"> logout</a>
	        </center>
			<table>
				<tr>
					<td>Company Name </td>
					<td>Walton</td>
				</tr>
				<tr>
					<td>job Title :</td>
					<td>sales man</td>
				</tr>
				<tr>
					<td>Description : </td>
					<td>A degree in sales, marketing, commerce or a related field would be advantageous.
                        Excellent communication skills.
                        Flexible work hours.
                        Basic mathematic skills.
                        Prior experience in retail.
                        Motivation to work through busy shifts.</td>
				</tr>
				
			</table>
		</fieldset>
	</form>
</body>
</html>