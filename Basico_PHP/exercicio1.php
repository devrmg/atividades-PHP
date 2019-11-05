<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Pegando valores no formulário
        $nome= $_GET["nome"];
        //Formula para informar a idade do usuário
        $idade= date("Y")-($_GET["date"]);
        
        //condição para dirigir
        if($idade>=18):
            echo "{$nome} você é maior de idade, então pode dirigir !";
            else:
                echo "Você ainda não pode dirigir, sua idade é {$idade} anos, e para dirigir tem que ter 18 anos ou mais!"; 
            
        endif;
        
        
        
        
        
        ?>
    </body>
</html>
