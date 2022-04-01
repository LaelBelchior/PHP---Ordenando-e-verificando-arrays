<?php

//Função que verifica se a chave existe dentro do array e se ela não é nula.

$notas = [
    'Aquino' => 5,
    'Yago' => 4,
    'Gabriela' => 3,
    'Ramon' => 4
];

var_dump(isset($notas['Aquino']));

$notasDois = [
    'Aquino' => 5,
    'Yago' => null,
    'Gabriela' => 3,
    'Ramon' => 4
];

var_dump(isset($notasDois['Yago']));