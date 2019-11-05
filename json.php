<?php
echo "<pre>";

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'joao',
    'idade'=> 20
));

array_push($pessoas, array(
    'nome'=>'glaucio',
    'idade'=> 30
));

echo json_encode($pessoas);// json encode transforma array em json

echo "</pre>";

?>