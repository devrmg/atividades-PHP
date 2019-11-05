<?php

$name=$_POST['name'];
echo "Sr.(ª)".$name." seu novo e-mail é:<br>".strtolower(substr($name,0,1).".".end(explode(' ',$name)).strlen($name))."@cheetos.com.br"; 

?>    
