<?php

//Pega as variáveis e transforma em um array. 

$nome = 'Lael';
$idade = 23;
$peso = 89;

$informacoes = compact('nome', 'idade', 'peso');

var_dump($informacoes);

