<html>
	<head> <title> PHP </title>
		    <meta charset = "utf-8">
	</head>
	<body>
		<?php
			
			
			error_reporting(1);
			
			
			
			 $linhas = $_GET["qtd_linhas"];
			
			$_GET["qtd_linhas"];
			echo "<table border = '1'>";
			for ($i = 1 ; $i <= $linhas; $i++ ){
				
				echo "<tr>
						<td>L$i C1 </td>
						<td>L$i C2 </td>
						<td>L$i C3 </td>
						<td>L$i C4 </td>
						<td>L$i C5 </td>
					</tr>";
			}
			
			echo "</table>";
			
			
			
		?>
		
			
				
		</body>
</html>