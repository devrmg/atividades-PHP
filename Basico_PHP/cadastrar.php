<?php

// Não exibe notificação e alerta
error_reporting(1);

// Clicou em enviar?
if ($_GET != NULL) {
	
	// Obtém os parâmetros
	$nome = addslashes ($_GET["nome"]);
	$matricula = addslashes ($_GET["matricula"]);
	$email = addslashes ($_GET["email"]);
	$sexo = addslashes ($_GET["sexo"]);
	$curso = addslashes ($_GET["curso"]);
	
	// Conecta ao BD
	$conexao = new mysqli( "localhost", "andrecos_unifacs", "unifacs123", "andrecos_unifacs" );
	
	// Erro na conexão?
	if ( $conexao->connect_error == true ) {
		
		echo $conexao->connect_error;
	
	}
	
	// Cria comando SQL
	$sql = "INSERT INTO aluno (nome, matricula, email, sexo,curso) 
			VALUES ('$nome', '$matricula', '$email', '$sexo' ,'$curso')";
	
	// Executa no BD
	$retorno = $conexao->query( $sql );
	
	// Executou?
	if ( $retorno == true ) {
		
		echo "<script>
				alert('Cadastro realizado com sucesso!');
				location.href='cadastrar.php';
			  </script>";
		
	// Deu erro..
	} else {

		echo "<script>
				alert('Erro ao cadastrar!');
			  </script>";
		
		echo $conexao->error;
		
	}
	
}

?>

<html>
	<head>
		<title>Cadastrar</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		
		<h1>Cadastro de Alunos</h1>
	
		<fieldset>
			<legend>Cadastrar Aluno</legend>
	
		<form method="GET">
		
			Nome:<br>
			<input type="text" name="nome" required maxlength="100">
			<br><br>	
			
			Matrícula:<br>
			<input type="text" name="matricula" required maxlength="50">
			<br><br>
			
			Email:<br>
			<input type="email" name="email" required maxlength="100">
			<br><br>
			
			Sexo:<br>
				<input type="radio" name="sexo" value="Masculino"> Masculino
				<input type="radio" name="sexo" value="Feminino"> Feminino
				<br><br>
			Curso:
			<select name="curso" required>
				<option value="">Selecione</option>
				<option value="Sistemas para internet">Sistemas para internet</option>
				<option value="Sistemas de Informacao">Sistemas de Informacao</option>
                <option value="Redes">Redes</option>
				
			</select>
			<br><br>
			
			
			<input type="submit" value="Cadastrar">
			
		</form>
		
		</fieldset>
		
		
	</body>
</html>