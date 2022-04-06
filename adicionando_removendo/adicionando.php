<?php

//Função para adicionar itens ao final do array.

$pessoas = [
    'Gabrielle',
    'Yuri',
    'Aquino',
    'Milena'
];

var_dump($pessoas);

array_push($pessoas, 'Lael');

var_dump($pessoas);


//Função para adicionar itens no começo do array.

$pessoas2 = [
    'Yago',
    'Gabriela',
    'Ramon'
];

var_dump($pessoas2);

array_unshift($pessoas2, 'TT');

var_dump($pessoas2);