<?php

//Função para remover e retornar primeiro item do array.

$pessoas = [
    'Nathalia',
    'Mateus',
    'Didinha',
    'Chay'
];

var_dump($pessoas);

echo array_shift($pessoas). PHP_EOL;

var_dump($pessoas);


//Função para remover e retornar último item do array.

$pessoas2 = [
    'Nathalia',
    'Mateus',
    'Didinha',
    'Chay'
];

var_dump($pessoas2);

echo array_pop($pessoas2). PHP_EOL;

var_dump($pessoas2);