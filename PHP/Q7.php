<?php
$n = 3;
$output = '';
for ($i=1; $i <= $n; $i++) { 
    $output .= $i;
}

for ($i=0; $i < $n; $i++) { 
    $output[$i] = '*';
    echo $output . "\n";
}
?>