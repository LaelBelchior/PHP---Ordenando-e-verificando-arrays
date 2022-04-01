<?php

//Função para verificar se o valor existe dentro do array e qual chave o possui.

$notas = [
    'Aquino' => 5,
    'Yago' => 4,
    'Gabriela' => 3,
    'Ramon' => 4
];

echo array_search(3, $notas) . PHP_EOL;