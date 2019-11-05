<html>
<head>
<?php
$icone = array();
$icone[0] = 'icone01.png';
$icone[1] = 'icone02.png';
$icone[2] = 'icone03.png';
$icone[3] = 'icone04.png';
$icone[4] = 'icone05.png';
?>


</head>
<body>

<table border='1px'>
<?php
	for($x = 0; $x <=4; $x++){
	echo "<tr><td><img src='icones/";
	echo $icone[$x];
	echo "'></td></tr>";
	}
?>
</table>
</body>
</html>



