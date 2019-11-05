<?php

$nome=$_POST['nome'];
$altura=$_POST['altura']/100;
$peso=$_POST['peso'];

if ($nome && $altura && $peso){
    
    $imc=$peso/pow($altura,2);
    
    if ($imc <= 18.5){
        $resultado = "abaixo do peso";
    }
    
    elseif ($imc >= 18.6 && $imc < 25){
        $resultado = "peso normal";
    }
    
    elseif ($imc >= 26 && $imc < 30){
        $resultado = "acima do peso";
    }
    
    else {
        $resultado = "obesidade";
    }
    
    echo $nome." está com um IMC = ".$imc." - ".$resultado;
    
}

elseif (!$nome) {
    echo "Informações incorretas";
}

elseif (!$altura) {
    echo "Informações incorretas";
}

elseif (!$peso) {
    echo "Informações incorretas";
}

?>    
