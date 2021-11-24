<?php

function cal(){

    if(isset($_GET['='])){
    $firstnumber=$_GET['f_value'];
    $secondnumber=$_GET['s_value'];
    $opration=$_GET['operation']; 
    if (is_numeric($firstnumber)) {
    if (is_numeric($secondnumber)) {
    if($opration==""){
    echo "<script>alert('Choose Operation')</script>";
    exit();
     }
    else if ($opration=="+"){
    $adding= $firstnumber +$secondnumber;
    echo "<b>Add</b> ".$firstnumber."+".$secondnumber."= <b>". $adding."</b>";
    exit();
    }
    else if ($opration=="-"){
    $sub= $firstnumber -$secondnumber;
    echo "<b>Subtract</b> ".$firstnumber."-".$secondnumber."= <b> ". $sub."</b>";
    exit();
    }
    else if ($opration=="*"){
    $mul= $firstnumber*$secondnumber;
    echo "<b>Multiply </b>".$firstnumber."*".$secondnumber."= <b>". $mul."</b>";
    exit();
    }
   else if ($opration=="/"){
   $div= $firstnumber /$secondnumber;
   echo "Divide ".$firstnumber."/".$secondnumber."= ". $div;
   exit();
    }
   }

else{
echo "put data";
  }

}
?>

