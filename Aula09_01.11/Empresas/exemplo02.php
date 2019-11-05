<html>
<head>
<?php
$empresa = array(
				array('adobe.png','http://www.adobe.com/br/'),
				array('google.png','https://www.google.com.br/?gws_rd=ssl'),
				array('microsoft.png','https://www.microsoft.com/pt-br/'),				
			);
?>


</head>
<body>

<table border='1px'>
<?php
	for($x = 0; $x <=2; $x++){
	echo "<tr><td>";
	echo "<a href='";
	echo $empresa[$x][1];
	echo "'><img src='empresas/";
	echo $empresa[$x][0];
	echo "'></a></td></tr>";
	}
?>
</table>
</body>
</html>



