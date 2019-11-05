<?php

$word = $_POST['word'];
if (strtolower(strrev($word))==strtolower($word)) {
    echo "A palavra <b>".$palavra."</b> é um palíndromo.";
}
else {
    echo "A palavra <b>".$palavra."</b> não é um palíndromo.";
} 

?>    