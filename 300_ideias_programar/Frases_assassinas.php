<?php

$frases= array(
    "Isto não vai dar certo",
    "Você nunca vai conseguir",
    "Você vai se estrepar",
    "Não vai dar em nada",
    "Está tudo errado!"
);

$rand_keys= array_rand($frases,2);
echo $frases[$rand_keys[0]];


?>