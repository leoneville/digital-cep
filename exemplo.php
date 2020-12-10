<?php

require_once "vendor/autoload.php";

use Neville\DigitalCep\BuscadorViaCep;

$busca = new BuscadorViaCep;

$resultado = $busca->siteViaCep('60811000');

if (empty($resultado)){
    $resultado = $busca->siteApiCep('60810820');
}else{
    print_r($resultado);
    die();
}

print_r($resultado);