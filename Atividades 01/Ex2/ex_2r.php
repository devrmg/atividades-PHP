<?php

$number=$_POST['number'];
    
if($number > 100 ){
    echo "Você digitou um número superior a 100, por favor digite outro.";
}   

elseif($number < 0){
    echo "Você digitu um número inferior a 0, por favor digite outro.";
}

else {
    if($number%2 == 0){
        echo "O número digitado foi: ".$number.". Ele é par.";
    }
    
    else{
        echo "O número digitado foi: ".$number.". Ele é impar.";
    }
}

?>    