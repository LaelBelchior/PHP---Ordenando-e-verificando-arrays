<?php

//Operador que desempacota os itens dos arrays e cria um outro juntando os arrays.

$amigos = [
    'Gabrielle',
    'Yuri',
    'Lael'
];

$amigos2 = [
    'Aquino',
    'Milena'
];

$totalAmigos = [...$amigos, ...$amigos2];

var_dump($totalAmigos);