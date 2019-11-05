<form>
    <label for="nome"><b>Nome:</b></label><br>
    <input type="text" name="Nome" placeholder="Seu nome completo"><br>
    <label for="nome"><b>Endereço:</b></label><br>
    <input type="text" name="Endereço" placeholder="Seu endereço"><br>
    <label for="nome"><b>Cep:</b></label><br>
    <input type="number" name="Cep" placeholder="Seu cep"><br>
    <br>
    <input type="submit" value="enviar"><br>


</form>


<?php

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        
        echo "  ".  $key;
        echo  " : ".  $value;
        echo "<hr>";

    }


}


?>