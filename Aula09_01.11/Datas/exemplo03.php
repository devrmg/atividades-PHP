<?php


    date_default_timezone_set('America/Sao_Paulo');
    $dataLocal = date('d/m/Y');
	$data = explode("/",$dataLocal);
	if($data[1]==1){$mes = "Janeiro";}
	if($data[1]==2){$mes = "Fevereiro";}
	if($data[1]==3){$mes = "Março";}
	if($data[1]==4){$mes = "Abril";}
	if($data[1]==5){$mes = "Maio";}
	if($data[1]==6){$mes = "Junho";}
	if($data[1]==7){$mes = "Julho";}
	if($data[1]==8){$mes = "Agosto";}
	if($data[1]==9){$mes = "Setembro";}
	if($data[1]==10){$mes = "Outubro";}	
	if($data[1]==11){$mes = "Novembro";}
	if($data[1]==12){$mes = "Dezembro";}
	
	echo "Cidade, $data[0] de $mes de $data[2]";
	
?>




