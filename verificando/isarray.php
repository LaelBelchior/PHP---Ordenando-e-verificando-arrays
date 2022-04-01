<?php

//Função para ver se a variável é um array.

$notas = [
    'Gabrielle' => 10,
    'Yuri' => 9,
    'Aquino' => 8,
    'Ramon' => 7,
    'Yago' => 6,
    'Gabriela' => 5,
    'Lael' => 4
];

if (is_array($notas)){
    echo 'Sim, é um array!' . PHP_EOL;
} else {
    echo 'Não é um array!' . PHP_EOL;
}