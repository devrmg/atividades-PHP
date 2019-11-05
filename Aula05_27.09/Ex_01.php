<?php
    //Ex. 1

    $x = 0;
    while ( $x <= 100 ){
        echo "$x, ";
        $x++;
    }

?>

<br>

<?php
    //Ex. 2

    for ($x=1; $x<=100; $x++){
        echo "$x, ";  
    }
        
?>

<br>

<?php
    //Ex. 3

    $x = 0;
    while ( $x <= 100 ){
        echo "$x, ";
        $x+=2;
    }

?>

<br>

<?php
    //Ex. 4

    $t=5;
    $x=1;
    while ($x <= 10){
        echo "$t * $x = ".$t*$x."<br>";
     $x++;   
    }   
  
?>

<br>

<?php
    //Ex. 5

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
    //Ex. 6

error_reporting(0);
ini_set(“display_errors”, 0 );

	$x = 0;

	do {
		echo date("0:")."$x <br>";
		$x++;		
	} while ($x <= 59);

    	$x = 1;
	do {
		echo date("1:")."$x <br>";
		$x++;		
	} while ($x <= 59);

    	$x = 1;
	do {
		echo date("2:")."$x <br>";
		$x++;		
	} while ($x <= 59);

    	$x = 1;
	do {
		echo date("3:")."$x <br>";
		$x++;		
	} while ($x <= 59);

    	$x = 1;
	do {
		echo date("4:")."$x <br>";
		$x++;		
	} while ($x <= 59);
  
?>

<br>

<?php
    //Ex. 7

error_reporting(0);
ini_set(“display_errors”, 0 );

	for($x=0; $x <=59; $x++){
		echo date("0:")."$x <br>";
	}

	for($x=0; $x <=59; $x++){
		echo date("1:")."$x <br>";
	}

	for($x=0; $x <=59; $x++){
		echo date("2:")."$x <br>";
	}

	for($x=0; $x <=59; $x++){
		echo date("3:")."$x <br>";
	}

	for($x=0; $x <=59; $x++){
		echo date("4:")."$x <br>";
	}
  
?>

<br>

<?php
    //Ex.8
    
    $x = 0;
    $y = 0;

    while ( $x <= 100 ){
        if ( $y != 1){
            echo"<span style='color:blue'>$x</span><br>";
            $y++;
        }
        else{
            echo "<span style='color:red'>$x</span><br>";
            $y--;
        }
        
        $x+=5;
    }

?>

<br>

<?php
    //Ex.9
    
    $x = 0;
    $y = 0;

    while ( $x <= 100 ){
        if ( $y == 0){
            echo"<span style='color:blue'>$x</span><br>";
            $y++;
        }
        elseif ($y == 1){
            echo"<span style='color:black'>$x</span><br>";
            $y++;
        }
        elseif ($y == 2){
            echo"<span style='color:orange'>$x</span><br>";
            $y++;
        }
        else{
            echo "<span style='color:red'>$x</span><br>";
            $y-=3;
        }
        
        $x+=5;
    }

?>

<br>

<?php
    //Ex.10
    
    $frase="NOIS TUDO LOKO POR PHP";

    for ($i = 0; $i <= 30; $i++){
        echo substr ($frase,$i,1);
        echo "<br>";
    }

?>

<br>

<?php
    //Ex.11

    $frase="NOIS TUDO LOKO POR PHP";

    for ($i = 30; $i >= 0; $i--){
        echo substr ($frase, $i, 1);
        echo "<br>";
    }

?>

<br>

<?php
    //Ex. 12

    $frase="Pedro de Alcântara Francisco Antônio João Carlos Xavier de Paula Miguel Rafael Joaquim José Gonzaga Pascoal Cipriano Serafim de Bragança e Bourbon";
        
    echo "O nome de Dom Pedro I tem: ".strlen($frase)."caracteres";

?>

<br>

<?php
    //Ex. 13

    $frase="Pedro de Alcântara Francisco Antônio João Carlos Xavier de Paula Miguel Rafael Joaquim José Gonzaga Pascoal Cipriano Serafim de Bragança e Bourbon";

    $frase = str_replace (" ", "<br>", $frase);
    echo $frase;
 
?>

<br>

<?php
    //Ex.14

     function retangulo($base, $altura){
        $p1 = 2*($base + $altura);
        echo $p1;
    }
    retangulo(5, 6);
echo "<br>";

	function quadrado($l1){
        $p2 = $l1*4;
        echo $p2;
	}
	quadrado (1);	
echo "<br>";

	function paralelogramo ($a, $b){
		$p3 = 2*($a + $b);
        echo $p3;
	}
	paralelogramo (5, 6);
echo "<br>";
    
    function trapzomba ($d1, $d2, $b1, $b2){
		$p4 = $d1 + $d2 + $b1 + $b2;
        echo $p4;
	}
    trapzomba (1, 2, 3, 5);
echo "<br>";    

?>

<br>

<?php
    //Ex. Racha Cuca

    function perimetro($a=0,$b=0,$c=0,$d=0){
        
        if ($a != 0){
            $p = $a*4;
        }
        
       if ($a != 0 and $b != 0){
            $p = $a+$a+$b+$b;
        }
        
        if ($a != 0 and $b != 0 and $c != 0){
            $p = $a+$b+$c+$d;
        }
        
        echo $p;
    }
    
    perimetro (2,3);
        echo "<br>";
    

?>

<br>






























