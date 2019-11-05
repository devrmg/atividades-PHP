<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //validando E-mail
        function EmailValidade($Email) {
            if (filter_var($Email, FILTER_VALIDATE_EMAIL)): //Verifique se a variável $ e-mail é um endereço de e-mail válido
                return TRUE;
            else :
                return FALSE;
            endif;
        }

        // Testanto o Programa
        $nome = 'Erik';
        $Email = 'erik7@hotmail.com';

        if (empty($nome || empty($Email))):// empty(Se a variaável -> Não existe ou estiver vazio) caso verdadeiro
            echo "Erro! Informe seu nome e E-mail"; // Informe essa mensagem
        elseif (!EmailValidade($Email)): // Se o E-mail informado não for compatível, informe:
            echo "Erro! E-mail inválido";// informe essa mensagem
        else:
            $Users = ['erik@hotmail.com', 'livia@hotmail.com']; // Simulando um banco com array
            if (in_array($Email, $Users)): //Consultando os valores dentro do array, se o valor da variável $Email for igual a do array informe:
                echo "Ops, Você já é Cadastrado";// Informe essa mensagem
            else:// Caso ao contrário informe:
                echo "Cadastro realizado com sucesso";//Informe essa mensagem

            endif;
        endif;
        ?>
    </body>
</html>
