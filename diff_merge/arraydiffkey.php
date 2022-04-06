<?php

//Pega todas as chaves que não estejam em outros arrays, ignorando os valores.

$notasUm = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 2,
    'Lael' => 3
];

$notasDois = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 2
];

var_dump(array_diff_key($notasUm, $notasDois));

$notasTres = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 4,
    'Lael' => 3
];

$notasQuatro = [
    'Yuri' => 6,
    'Aquino' => 2,
    'Lael' => 3
];

var_dump(array_diff_key($notasTres, $notasQuatro));