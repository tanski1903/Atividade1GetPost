<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

if($op == 'a'){
    $r = $n1+$n2;
}else if($op =='s'){
   $r= $n1-$n2;
}else if($op == 'm'){
$r= $n1*$n2;
}else{
$r=$n1/$n2;
}
echo "$r";
?>