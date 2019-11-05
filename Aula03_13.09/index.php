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

<br>

<?php
    //-------------------------------------------------- Aula 13/09 
?>

<?php

    // Mostar na tela qual é o maior
    // Nota-se que não é possível colocas x>y>z, o php só aceita x>y ou x>z
    // Usar operadores condicionais "and" e "or"
    $x = 5;
    $y = 7;
    $z = 9;

    if ( $x > $z and $x > $y ){
        echo "X e maior"; 
    }

    if ( $y > $z and $y > $x){
        echo "Y e maior";
    }

    if ( $z > $x and $z > $y){
        echo "Z e maior";
    }
    
?>

<br>

<?php

    // Mostar na tela qual é o maior
    // Nota-se que não é possível colocas x>y>z, o php só aceita x>y ou x>z
    // Usar operadores condicionais "and" e "or"
    $x = 5;
    $y = 7;
    $z = 9;
    $w = 5;

    if ( $x > $z and $x > $y and $x > $w ){
        echo "X e maior"; 
    }

    if ( $y > $z and $y > $x and $y > $w){
        echo "Y e maior";
    }

    if ( $z > $x and $z > $y and $z > $w){
        echo "Z e maior";
    }
    
    if ( $w > $x and $w > $y and $w > $z){
        echo "W e maior";
    }
    
?>

<br>

<?php

    // Mostar na tela qual é o maior
    // Nota-se que não é possível colocas x>y>z, o php só aceita x>y ou x>z
    // Usar operadores condicionais "and" e "or"
    $x = 5;
    $y = 5;
    $z = 5;
    $w = 5;

    if ( $x > $z and $x > $y and $x > $w ){
        echo "X e maior"; 
    }

    else if ( $y > $z and $y > $x and $y > $w){
        echo "Y e maior";
    }

    else if ( $z > $x and $z > $y and $z > $w){
        echo "Z e maior";
    }
    
    else if ( $w > $x and $w > $y and $w > $z){
        echo "W e maior";
    }
    
    else {
        echo "eita";
    }
?>

<br>

<?php

    //Switch
    //É usado em casos onde teriam que ser usados vários "ifs"
    // Com números: case 1 / if (op==1)

    $periodo = "n";

    switch ( $periodo ){
            case "m":
                echo "Bom Dia";
                break;
            case "t":
                echo "Boa Tarde";
                break;
            case "n":
                echo "Boa Noite";
                break;
            default:
                echo "Bons Sonhos";
    }
?>

<br>

<?php

    //while =laço derepetição
    //~$X++ SOMA MAIS UM
    //$X = $X + N ADICIONA n NA EQUEÇÃO
    // utilizar sempre $x+=n nolugar de $X = $X + N

    $x = 0;
    while ( $x <= 100 ){
        echo "$x <br>";
        $x = $x + 20;
    }
?>

<br>

<?php

    $x = 100;
    while ( $x >= 0 ){
        echo "$x <br>";
        $x-=20;
    }
?>

<br>

<?php

    // != significa diferente
    
    $x = 1000;
    while ( $x >= 0 ){
        if ( $x != 500){
            echo"<span style='color:blue'>$x</span><br>";
        }
        else{
            echo "<span style='color:red'>$x</span><br>";
        }
        
        $x-=100;
    }
?>

<br>

<?php

    //Criar calculadora que faça a tabuada do 1 até o 10

    $t=5;
    $x=1;
    echo "<table style='border:solid 1px black;'>";
    while ($x <= 10){
        echo "<tr style='border:solid 1px black;'><td style='border:solid 1px black;'>$t * $x = ".$t*$x."</tr></td>"."<br>";
     $x++;   
    }   
    echo "</table>";
  
?>

<br>

<?php

    //DO-> primeiro ele faz depois checa
    // dependendo da resposta da pessoa o while executa uma ação

    $x = 1;
    do {
        echo "$x <br";
        $x++;
    } while ($x <= 10);

?>

<br>

<?php

    //FOR _> Igual em C
    // usa quandosabe quando começa e quando termina
    // while usa quando não sabe quando começa e quando termina

    for ($x=1; $x<=10; $x++){
        echo "$x <br>";  
    }
        
    // { break; }    __> Para o loop


?>

<br>

<?php

    foreach ($_SERVER as $var => $value){
        echo "$var => $value <br>";
    }
?>








