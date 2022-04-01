<?php

//Função para verificar se tem uma chave dentro do array.

$notas = [
    "Gabrielle" => 5,
    "Yuri" => 6,
    "Lael" => 5
];

var_dump(array_key_exists('Lael', $notas));
