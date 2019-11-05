<?php
	$idade = 20;
	// incluindo topo da página
	include('topo.php');
	// incluindo corpo da página
	include('corpo.php');
	// organizando os arquivos dentro de pastas
	if($idade <=18){
		include('includes/corpo01.php');
	}else{
		include('includes/corpo02.php');
	}
	// incluindo rodapé da página
	include('rodape.php');
?>






