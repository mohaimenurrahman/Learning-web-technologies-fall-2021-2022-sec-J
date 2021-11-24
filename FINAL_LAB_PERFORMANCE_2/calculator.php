<?php

function cal(){

    if(isset($_GET['='])){
    $f_value=$_GET['f_value'];
    $s_value=$_GET['s_value'];
    $opration=$_GET['operation']; 
    if (is_numeric($f_value)) {
    if (is_numeric($s_value)) {
    if($opration==""){
    echo "<script>alert('Choose Operation')</script>";
    exit();
     }
    else if ($opration=="+"){
    $adding= $f_value +$s_value;
    echo "<b>Add</b> ".$f_value."+".$s_value."= <b>". $adding."</b>";
    exit();
    }
    
}
?>

