<?php

$name=$_POST['name'];
    
if($name){
    echo strtoupper(end(explode(' ',$name))).", ".ucwords(str_replace(end(explode(' ',$name)),'',$name))."-".getdate()['year'];
}   

else{
    echo "Autor Desconhecido -".getdate()['year'];
}

?>    