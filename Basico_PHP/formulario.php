<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Pegando valores do formulário
        $nome= $_GET["nome"];
        $email= $_GET["email"];
        $msg= $_GET["mensagem"];
        //Apresentando os valores do formulário
        echo "Nome : {$nome} <br> email: {$email} <br> mensagem: {$msg}";
        ?>
        <!--Link para voltar ao formulário -->
        <a href="index.php">Voltar</a>
    </body>
</html>
