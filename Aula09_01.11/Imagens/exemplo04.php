<?php

	$imagem = array();
	$imagem[0] = "jogo01.png";
	$imagem[1] = "jogo02.png";
	$imagem[2] = "jogo03.png";
	$imagem[3] = "jogo04.png";
	$imagem[4] = "jogo05.png";
	$x = rand(0, 4);

echo "<img src='jogos/$imagem[$x]'>";

?>
