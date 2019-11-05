<?php

//Comando para imprimirnatela
echo "Ola Mundo...";

?>

<br>

<?php

//phpinfo();
echo "<b> teste </b>";

?>

<?php

    // $ define uma variável ex.: 
    // $dinheiro = 3;
    // $dinheiro = "Victor";    nota-se o uso de "#".
    // $estado = 'SP';          nota-se o uso de '#'.

    // $preco = "10 Litros";
    // $conta = $preco + 5 ;    nota-se que o php irá efetuar a conta e não irá mostrar o "Litro".

?>

<br>

<?php

    //  if(expressão){
    //          comando(s)
    //   }

    $hora = 12;
    if($hora <= 12) {
            echo "Bom Dia";
    }

?>

<br>

<?php

    $hora = 15;
    if ($hora<= 12){
            echo "Bom dia";
    }
    else {
            echo "Boa tarde";
    }

?>

<br>

<?php
    
    // é possível fazer mais de um teste dentro de um if, utilizando (and)
    // nota-se que o else só é utilizado quando não existem mais textes a serem executados

    $hora = 3;
    if ($hora > 6 and $hora <= 12){
            echo "Bom dia";
    } elseif ($hora > 12 and $hora <= 18){
        echo "Boa tarde";
    } elseif ($hora > 18 and $hora <= 24){
        echo "Boa noite";
    } else {
        echo "Bons Sonhos";
    }

?>

<br>

<?php

    $x = 5;
    $y = 10;

    if ( $x < $y ){
        echo " O maior e o y = " . $y;
    }elseif ( $x = $y ){
        echo " Sao iguais" . $x . " = " . $y;
    }else {
        echo " O maior e o x = " . $x;
    }
    
?>

<?php
    //-------------------------------------------------- Aula 13/09 
?>

<?php

    // Mostar na tela qual é o maior
    
    $x = 5;
    $y = 7;
    $z = 9;

    if( $x > $y > $z ){
        echo "X e maior";
    }
    elseif( $x > $z > $y){
        echo "X e maior";
    }
    elseif( $y > $x > $z){
        echo "Y e maior";
    } elseif( $y > $z > $x){
        echo "Y e maior";
    }
    elseif( $z > $x > $y){
        echo "Z e maior";
    } elseif( $z > $y > $x){
        echo "Z e maior";
    }

?>



        
        
        
        
        
        
        
        
        