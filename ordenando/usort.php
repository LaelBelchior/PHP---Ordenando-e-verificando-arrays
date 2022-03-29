<?php

//Função sort, mas com o usuário definindo o critério de ordenação.

require_once 'ordenaNotas.php';

$notas = [
    [
        'aluno' => 'Lael',
        'nota' => 6,
    ],
    [
        'aluno' => 'Aquino',
        'nota' => 7,
    ],
    [
        'aluno' => 'Nathalia',
        'nota' => 9,
    ],
    [
        'aluno' => 'Mateus',
        'nota' => 8,
    ]
];

usort($notas, 'ordenaNotas');

var_dump($notas);