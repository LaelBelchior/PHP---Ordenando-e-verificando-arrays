<?php

//Função para verificar se o valor está dentro do array.

$notas = [
    'Aquino' => 5,
    'Yago' => 4,
    'Gabriela' => 3,
    'Ramon' => 4
];

var_dump(in_array(3, $notas));