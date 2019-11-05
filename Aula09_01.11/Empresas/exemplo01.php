<html>
<head>
<?php
$empresa = array();
// imagens
$empresa[0] = 'adobe.png';
$empresa[1] = 'google.png';
$empresa[2] = 'microsoft.png';
//empresas
$link[0] = 'http://www.adobe.com/br/';
$link[1] = 'https://www.google.com.br/?gws_rd=ssl';
$link[2] = 'https://www.microsoft.com/pt-br/';
?>


</head>
<body>

<table border='1px'>
<?php
	for($x = 0; $x <=2; $x++){
	echo "<tr><td>";
	echo "<a href='";
	echo $link[$x];
	echo "'><img src='empresas/";
	echo $empresa[$x];
	echo "'></a></td></tr>";
	}
?>
</table>
</body>
</html>



