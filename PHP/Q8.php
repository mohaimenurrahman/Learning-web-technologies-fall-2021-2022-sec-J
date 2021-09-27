<?php

echo "<table border=1>

 $bita = [
		's1'=>['ax'=>1, 'bx'=>2, 'cx'=>3, 'dx'=>'A'], 
		's1'=>['ax'=>1, 'bx'=>2, 'cx'=>B, 'dx'=>'C'],
		's1'=>['ax'=>1, 'bx'=>D, 'cx'=>E, 'dx'=>'F'] 
	    ]
      ";

foreach ($bita as $std) {
	
		echo "<tr>
				<td>".$std['ax']."</td>
				<td>".$std['bx']."</td>
				<td>".$std['cx']."</td>
				<td>".$std['dx']."</td>
				
				
			</tr>";
	}


echo"</table>"


?>