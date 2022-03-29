<?php

// Função sort, mas mantendo as chaves e fazer o reverso.

$notas = [
    'Lael' => 10,
    'Gabrielle' => 9,
    'Yuri' => 5,
    'Aquino' => 8,
    'Gabriela' => 4,
    'Yago' => 2,
    'Ramon' => 3
];

arsort($notas);

var_dump($notas);