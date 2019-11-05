<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Condicional caso 'Switch'
        $number = isset($_GET["num"]) ? $_GET["num"] : 0; // isset: se existe. '?'--> se, caso não exista: return '0'
        $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        
        switch ($oper) {
            case 1:
                $resultado = $number * 2;
                break; // break , interromper se o caso for verdadeiro
            case 2:
                $resultado = $number ^ 3;
                break;
            case 3:
                $resultado = sqrt($number);
        } 
                echo "O resultado da operação solicitada foi:  {$resultado}";
        ?>
        <hr>
        <a href="index.php">Voltar</a>
    </body>
</html>
