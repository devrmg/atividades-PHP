<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Função em PHP - Tabuada</title>
    </head>
    <body>
        <?php
        //Construção de uma função, com a palavra reservada "function"
        function Tabuada() {
            echo "<b>Tabuada do 7:</b><br>";
            for ($x = 1; $x <= 10; $x++):
                echo "7 x {$x} = ". 7 * "{$x}". "<br>";
            endfor;
        }
        
        echo Tabuada();//A função só vai ser imprimida se ela for chamada fora da função
        echo "<hr>";
        //Criando uma função recursiva
        function minhaTabuada($numero){ //Dentro do parametro informo uma variável
            echo "<b>Tabuada do {$numero}:</b><br>";
            for ($x = 1; $x <= 10; $x++):
                echo "{$numero} x {$x} = ". "{$numero}" * "{$x}". "<br>";
            endfor;
        }
        //Com um programa, pode se desenvolver diversos outros programas, facilitando a vida do programador
        
        echo minhaTabuada(1);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(2);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(3);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(4);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(5);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(6);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(7);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        echo "<hr>";
        echo minhaTabuada(8);// Quando eu chamar minha função, eu informo dentro do parametro o valor da variável e assim o programa desenvolve conforme o valor informado
        ?>
    </body>
</html>
