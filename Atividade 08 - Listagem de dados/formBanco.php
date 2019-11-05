<?php

// Include: Conexão com banco
include_once "teste_conexao.php";

// Query select
$stmt = $conn->prepare("SELECT `nome` FROM `usuarios`");

// Execução da query
$stmt->execute();

// Formatação do resultado
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

	
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Atividade 08 - Miguel Batista</title>
		<meta charset="UTF-8" lang="PT-BR">
		<!-- CSS -->
		<style>	
			body{
				overflow:hidden;
			}
			
			h3 {
				text-align: center;
			}
		
			img{
				width: 200px;
				heigth: 200px;
				display: block;
				position: fixed;
				margin-top: 200px;
				margin-left: 60px;
			}
			
			footer{
					width:300px;
					padding-left: 10px;
					margin-top: 300px;
					border: 2px dashed #dddddd;
					background: #fff;
				}
				
		</style>
		
	</head>
	
	<body>
		<section>
				<?php
				
					echo "Selecione um autor: <select>";
						foreach ($dados as $dado):
							echo "<option value='$dado'>$dado</option>";
						endforeach;
					echo "</select>";
				
				?>	
		
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
