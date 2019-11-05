<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Estrutura de Repetição</title>
    </head>
    <body>

        <?php
        $t = 1;
        while ($t <= 10):
            echo "{$t} x 10 = " . $t * 10 . "<br>";
            // Adiciona +1 na variável
            $t++;


        endwhile;

        echo "<hr>";

        //Contador Personalizado
        //Pegando os valores do Formulário
        $num1 = isset($_GET["num1"]) ? $_GET["num1"] : 0; // isset: se existe. '?'--> se, caso não exista: return '0'
        $num2 = isset($_GET["num2"]) ? $_GET["num2"] : 0;

        $inc = isset($_GET["inc"]) ? $_GET["inc"] : 1;


        //Loop do contador sendo progressimo


        if ($num1 == $num2): //Condição se o valor for igual, não realizar o loop;
            echo "Valor Igual";
        else : //Se condição if for falsa, execute o else
            while ($num1 <= $num2)://Enquanto a minha variável "num1" for menor que "num2" faça:
                echo "{$num1} <br>"; // Imprima a variável "num1"
                $num1 += $inc; //Adicione o valor do incremento que o usuário selecionar. $num1 += $inc equivale a $num1= + $num1+ $inc
            endwhile; //exemplo: $num1=9; $num2=81; $inc=2; então 9 é menor que 81, imprima $num1 e adicione o valor de $inc, então $num=9 + $inc=2, o novo valor de $num1 é 11, 11 é menor que 81, repita o programa até chegar a 81
        endif;

        echo "<hr>";
        //Loop do contador com decremento
        //Mesma situação só que com o valor de decremento "-"

        if ($num1 == $num2): //Condição se o valor for igual, não realizar o loop;
            echo "Valor Igual";

        else: //Se condição if for falsa, execute o else
            while ($num1 >= $num2):

                echo "{$num1} <br>";
                $num1 -= $inc;

            endwhile;
        endif;
        ?>
        <a href="index.php">Voltar</a>
    </body>
</html>
