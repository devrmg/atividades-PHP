<?php

	// Função de listagem / coloração
		// $i = contador e $t = tipo de número (par ou impar).
			// $color = receberá a cor dependendo do tipo de número.
	function listar(){
		$i = 1;
			while($i <= 15):
				$i%2 == 0 ? $t = "par" : $t = "impar";
				$i%2 == 0 ? $color = "#fff" : $color = "#C0C0FF";
				echo "<tr><td style='background:$color'>Linha $i ($t) da tabela.</td></tr>";
				$i++;
			endwhile;	
	}
				

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Miguel Batista</title>
		<meta charset="UTF-8" lang="PT-BR">
	<!-- CSS -->
		<style>
		
			table{
				border: 1px solid #dddddd;
				text-align: center;
				padding: 8px;
				margin: auto;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
				0 2px 4px 0 rgba(0,0,0,0.08);
				
			}
			
			td{
				border: 1px solid #dddddd;
				text-align: left;
			}
			
			h2{
				text-align: center;
			}
			
			img{
				width: 200px;
				heigth: 200px;
				display: block;
				position: fixed;
				margin-top: -250px;
				margin-left: 60px;
			}
			
			
			footer{
				width:300px;
				padding-left: 10px;
				border: 2px dashed #dddddd;
				background: #fff;
				float: right
				postion: fixed;
				margin-top: -160px;
			}
		</style>
	</head>
	
	<body>
		<section>
				<h2>TABELA ZEBRADA COM 1 COLUNA E 15 LINHAS</h2>;
			<table>
				<?php
				// Chamada da função "listar".
				echo listar();	
				?>	
			</table>
		</section>
		<!-- Logo escola estadual -->
		<img src="http://www.alvinhopatriota.com.br/wp-content/uploads/2015/11/ETE.jpg"><br>
		<footer>
			
			<h3>Escola Técnica Miguel Batista</h3>
			<h3>Aluno: Kelvyn José da Silva Pereira</h3>		
			<h3>Curso: Desenvolvimeto de Sistemas</h3>		
		</footer>
		
	</body>
</html>