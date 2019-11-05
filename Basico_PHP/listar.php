
<html>
	<head>
		<title>Listar/Filtrar</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		
		<h1>Listar/Filtrar</h1>
	
		<a href="cadastrar.php">Cadastrar Contato</a>
		<br><br>

        <form method="GET">

        Filtrar
        <input type="text" name="filtro">
        <input type="submit" value="OK">

        
        
        </form>

		<table border="1">

			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Matricula</th>
				<th>Email</th>
                <th>Sexo</th>
				<th>curso</th>
				
			</tr>

			<?php

			// Não exibe notificação e alerta
            error_reporting(1);
            
            $filtro_sql="";

            //Filtrar
            if($_GET!= null){
                //obtem filtro do usuário
                $filtro = $_GET["filtro"];
                //criando filtro 
                $filtro_sql="WHERE id= ' '
                            OR nome LIKE '%$filtro%' 
                            OR matricula LIKE '%$filtro%'
                            OR email LIKE '%$filtro%'
                            OR sexo LIKE '%$filtro%'
                            OR curso LIKE '%$filtro%'";
            }

			// Conecta ao BD
			$conexao = new mysqli( "localhost", "andrecos_unifacs", "unifacs123", "andrecos_unifacs" );
			
			// Erro na conexão?
			if ( $conexao->connect_error == true ) {
				
				echo $conexao->connect_error;
			
			}

			// Criar comando SQL
			$sql = "SELECT * 
					FROM aluno $filtro_sql";

			// Executa no BD
			$retorno = $conexao->query( $sql );

			// Deu erro?
			if ( $retorno == false ) {
				echo $conexao->error;
			}

			// percorre todos os registros
			while ( $registro = $retorno->fetch_array() ) {

				// obtem os campos do registro
                $id = $registro["id"];
                $nome= $registro["nome"];
				$matricula = $registro["matricula"];
                $email = $registro["email"];
                $sexo= $registro["sexo"];
				$curso = $registro["curso"];

				// imprimir registro na tabela
				echo "<tr>
                        <td>$id</td>
                        <td>$nome</td>
						<td>$matricula</td>
                        <td>$email</td>
                        <td>$sexo</td>
						<td>$curso</td>
						
                    </tr>";
                   
			}

			?>

		</table>
		
	</body>
</html>