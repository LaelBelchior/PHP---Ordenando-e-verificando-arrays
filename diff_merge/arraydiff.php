<?php

//Pega todos os elementos que os valores não estejam em outros arrays.

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

var_dump(array_diff($notasUm, $notasDois));

$notasTres = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 4,
    'Lael' => 3
];

$notasQuatro = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 2,
    'Lael' => 3
];

var_dump(array_diff($notasTres, $notasQuatro));