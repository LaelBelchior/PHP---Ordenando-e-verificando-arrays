<?php

//Função sort, mas ordenando pelas chaves.

$notas = [
    'Lael' => 10,
    'Gabrielle' => 9,
    'Yuri' => 5,
    'Aquino' => 8,
    'Gabriela' => 4,
    'Yago' => 2,
    'Ramon' => 3
];

ksort($notas);

var_dump($notas);