<!DOCTYPE html>
<html lang="pt-br">   
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require ('./class/ClasseCaneta.php');
        $c1= new ClasseCaneta();
        $c1->modelo="Bic Cristal";
        $c1->cor="azul";
        print_r($c1);
        ?>
        </pre>
    </body>
</html>
