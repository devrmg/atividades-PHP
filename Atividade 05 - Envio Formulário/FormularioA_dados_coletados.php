<?php

// Inicia a sessão

session_start();

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
		
			h1{
				text-align: center;
			}
			
			section{
				margin: auto;
				width: 600px;
				padding: 20px 0px 25px 60px;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),0 2px 4px 0 rgba(0,0,0,0.08);
				border-radius: 10px	
			}
			input{
				margin: 10px;
			}
			
			textarea{
				width: 89%;
			}
			
			.btn{
				margin-left: 120px;
				
			}
			
			button{
				width: 150px;
				margin-top: px;
			}
			
			img{
				width: 200px;
				heigth: 200px;
				display: block;
				position: fixed;
				margin-top: -110px;
				margin-left: 60px;
			}
			
			footer{
					width:300px;
					padding-left: 10px;
					border: 2px dashed #dddddd;
					background: #fff;
				}
				
		</style>
	</head>
	
	<body>
		<section>
			<h1>Os dados coletados foram:</h1>
			<h3>Nome: <?php echo $_SESSION['nome'];?> </h3>
			<h3>E-mail: <?php echo $_SESSION['email'];?> </h3>
			<h3>Sexo: <?php echo $_SESSION['sexo'];?></h3>
			<h3>Região: <?php echo $_SESSION['regiao'];?></h3>
			<h3>Opnião: <?php echo $_SESSION['opniao'];?></h3>
			<h3>Receber e-mail: <?php echo $_SESSION['recEmail'];?></h3>
			<h3>Não visualizado: <?php echo $_SESSION['remetente'];?></h3>
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
