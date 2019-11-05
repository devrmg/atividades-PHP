<?php
	// Conexão com banco

	function conexao(){
		try { 
			$conn = new PDO("mysql:host=localhost;dbname=bd_etex", "root","root");
			echo "<h1>Conectado com sucesso!<h1>";

		} catch (PDOException $e) {
			echo "<h1>Erro na conexão... </h1>".$e;
			
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Atividade 05 - Miguel Batista</title>
		<meta charset="UTF-8" lang="PT-BR">
		<!-- CSS -->
		<style>	
			body{
				overflow:hidden;
			}
		
			h3, #conexao{
				text-align: center;
			}
			
			img{
				width: 200px;
				heigth: 200px;
				display: block;
				position: fixed;
				margin-top: 140px;
				margin-left: 60px;
			}
			
			footer{
					width:300px;
					margin-top: 250px;
					padding-left: 10px;
					border: 2px dashed #dddddd;
					background: #fff;
				}
				
		</style>
		
	</head>
	
	<body>
	
		<div id="conexao">
			<?php conexao();?>
		</div>
		<!-- Logo escola estadual -->
		<img src="http://www.alvinhopatriota.com.br/wp-content/uploads/2015/11/ETE.jpg"><br>
		<footer>
			<h3>Escola Técnica Miguel Batista</h3>
			<h3>Aluno: Kelvyn José da Silva Pereira</h3>		
			<h3>Curso: Desenvolvimeto de Sistemas</h3>		
		</footer>
		
	</body>
</html>
