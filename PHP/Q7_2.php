<?php

function alpa($n)
{
    
    $num = 3;
  
    for ($i = 1; $i < = $n; $i++)
    {
       
        for ($j = 1; $j <= $i; $j++ )
        {
              
            $ch = chr($num);
  
            echo $ch." ";

            $num = $num + 1;
        }
  
        echo "\n";
    }
}
  
    $n = 3;
   alpa($n);
      
?>
