<form>
<label for="Mensagem"><b>Mensagem para o Professor:</b></label><br><br>
<textarea name="Mensagem" cols="30" rows="10"></textarea><br><br>
<input type="submit" value="enviar">

</form>

<?php
    if (isset($_GET)) {
        foreach ($_GET as $value) {
            echo "Mensagem para o professor : <br> ";
            echo" ". $value;
        }
    }




?>