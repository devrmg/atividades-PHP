<?php 

$json= '[{"nome":"joao","idade":20},{"nome":"glaucio","idade":30}]';

$data= json_decode($json, true);// json decode transforma json em array ou objeto

var_dump($data);



?>