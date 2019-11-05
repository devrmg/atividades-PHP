<?php

//outras soluções
// l*l é igual a pow(valor,valor)
// pow = pontência 

function areaq ($l){
    return pow($l,2);
}
echo areaq (5);

?>

<br>

<?php

// get aparece os parametros na url usar em sites onde vc quer que o suário chegue no mesmo lugar 
// post fica oculto

?>

<form name="cadastro" method="get">
    nome:
    <br>
    
    <input type="text" name="nome">
    <br>
    
    <input type="submit" value="vai" name="butao">
    <br>
    
    login:
    <br>
    
    <input type="text" name="login">
    <br>  
    
    senha:
    <br>
    
    <input type="password" name="senha">
    <br>

</form>

<form name="cadastro" method="get" action="receber.php">
    nome:
    <br>
    
    <input type="text" name="nome">
    <br>
    
    <input type="submit" value="vai" name="butao">
    <br>
    
    login:
    <br>
    
    <input type="text" name="login">
    <br> 
    
    senha:
    <br>
    
    <input type="password" name="senha">
    <br>
</form>































