<?php

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}   
