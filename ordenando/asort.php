<?php

//Função sort, mas mantendo as chaves.

$notas = [
    'Lael' => 10,
    'Gabrielle' => 9,
    'Yuri' => 5,
    'Aquino' => 8,
    'Gabriela' => 4,
    'Yago' => 2,
    'Ramon' => 3
];

asort($notas);

var_dump($notas);