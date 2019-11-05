<?php

	
// Verificação do botão enviar
if(isset($_POST['btn-enviar'])):
	
	// Verificação de variáveis vazias
	$valido[] = 0;
	
	($_POST['nome'] != "") ? $valido[] = true : $msgErro[] = "Informe seu nome completo";
	($_POST['email'] != "") ? $valido[] = true : $msgErro[] = "Informe seu email.";
	($_POST['opniao'] != "") ? $valido[] = true : $msgErro[] = "Informe sua opnião.";
	
	if (count($valido) > 3 && count($msgErro == 0)):
		session_start();
		$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['sexo'] = $_POST['sexo'];
		$_SESSION['regiao'] = $_POST['regiao'];
		$_SESSION['opniao'] = $_POST['opniao'];
		$_SESSION['recEmail'] = $_POST['recEmail'];
		$_SESSION['remetente'] = $_POST['remetente'];
		header('location: FormularioA_dados_coletados.php');
	else:
		foreach($msgErro as $erro):
			echo $erro."</br>";
		endforeach;
	endif;
	
// Encerra verificação do botão enviar
endif;

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
		
			h3{
				text-align: center;
			}
			
			form{
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
			<h3>FORMULÁRIO A</h3>
				<form name="form_func" method="POST">		
					Nome: <input type="text" name="nome" id="0" placeholder=" Digite seu nome" size="55">
					<br>Email: <input type="text" name="email" id="1" placeholder=" nsistema@gmail.com" size="55"><br>
					<span>Sexo:</span>
						<label for="h">M</label><input type="radio" name="sexo" id="h" value="M" checked="true">
						<label for="f">F</label><input type="radio" name="sexo" id="f" value="F">
					Onde mora: <select name="regiao">
						<option value="Sul">Sul</option>
						<option value="Norte">Norte</option>
						<option value="Oeste">Oeste</option>
						<option value="Leste">Leste</option>
						<option value="Centro">Centro</option>
					<select></br>
					<h4>Obs:</h4>
					<div class="text-area">
						<textarea name="opniao"  id="2" col="50" rows="7" placeholder=""></textarea>
					</div>
					<input type="checkbox" name="recEmail" value="Sim">Desejo receber informações de lançamentos de novos livros.</br>
				</br><div class="btn">
					<input type="hidden" name="remetente" value="formA">
					<button type="submit" name="btn-enviar">Enviar</button>
					<button type="submit" oncliCk="<?php header:('location: FormularioA.php');?>">Limpar</button>
				</div>
			</form>
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
