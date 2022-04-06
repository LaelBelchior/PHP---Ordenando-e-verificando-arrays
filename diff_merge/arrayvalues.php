<?php

//Pegando apenas os valores das chaves que não estejam no array.

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

$alunos = array_diff_key($notasUm, $notasDois);
var_dump(array_values($alunos));


$notasTres = [
    'Gabrielle' => 5,
    'Yuri' => 6,
    'Aquino' => 4,
    'Lael' => 3
];

$notasQuatro = [
    'Aquino' => 2,
    'Lael' => 3
];

$alunosDois = array_diff_key($notasTres, $notasQuatro);
var_dump(array_values($alunosDois));
