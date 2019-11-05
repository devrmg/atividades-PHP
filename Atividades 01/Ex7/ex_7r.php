<?php

$pri=$_POST['pri'];
$seg=$_POST['seg'];
$ter=$_POST['ter'];
$qua=$_POST['qua'];
$qui=$_POST['qui'];

if ($pri && $seg && $ter && $qua && $qui){
    
    $array = array($pri,$seg,$ter,$qua,$qui);
    
    sort($array);
    
    echo $array[0].", ";
    echo $array[1].", ";
    echo $array[2].", ";
    echo $array[3].", ";
    echo $array[4].", ";
}

else { 
    echo "Insira todos os valores.";
}

?>    
