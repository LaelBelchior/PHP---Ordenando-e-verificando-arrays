<?php

//Função sort, mas ordenando pelas chaves ao contrário.

$notas = [
    'Lael' => 10,
    'Gabrielle' => 9,
    'Yuri' => 5,
    'Aquino' => 8,
    'Gabriela' => 4,
    'Yago' => 2,
    'Ramon' => 3
];

krsort($notas);

var_dump($notas);