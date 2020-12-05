<?php

require_once "vendor/autoload.php";

use Neville\DigitalCep\Buscador;

$busca = new Buscador;

$resultado = $busca->pegaEnderecoPorCep('60811000');

print_r($resultado);