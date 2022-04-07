<?php

//Pega as chaves dos arrays e transforma em variáveis.

$informacoes = [
    'nome' => 'Lael',
    'idade' => 23,
    'peso' =>  89
];

extract($informacoes);

var_dump($nome, $idade, $peso);

