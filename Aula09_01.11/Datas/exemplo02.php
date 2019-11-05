<?php
    date_default_timezone_set('America/Sao_Paulo');
    $dataLocal = date('d/m/Y');
	$data = explode("/",$dataLocal);
	
	echo "Cidade, $data[0] de $data[1] de $data[2]";
	
?>




