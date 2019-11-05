<?php

$temp=$_POST['temp'];

if ($temp >= 0) {
    
    $fah = 32 + ($temp*(9/5));
   
    if ($temp < 20){    
        echo $fah."Graus Fahrenheit ou ".$temp."Graus Celcius Portiolis é muito frio";
        echo "<br><img src='..jpg' alt='...'>"; 
    }
    
    elseif ($temp > 20 && $temp < 35){
        echo $fah."Graus Fahrenheit ou ".$temp."Graus Celcius Portiolis é bom";
        echo "<br><img src='..jpg' alt='...'>";
    }
    
    elseif ($temp > 35){
        echo $fah."Graus Fahrenheit ou ".$temp."Graus Celcius Portiolis é ruim de quente";
        echo "<br><img src='..jpg' alt='...'>";
    }
      
}
elseif (!$temp) {
    echo "Temperatura não foi informada corretamente";
} 

?>    
