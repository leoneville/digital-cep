<?php

namespace Neville\DigitalCep;

class BuscadorViaCep 
{
    private $url = "http://viacep.com.br/ws/";
    private $link = "https://ws.apicep.com/cep/";

    public function siteViaCep(string $cep): array{
        $cep = preg_replace('/[^0-9]/im', '', $cep);

        $get = file_get_contents($this->url . $cep . "/json");

        return (array) json_decode($get);
    }

    public function siteApiCep(string $zipcode): array{
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $file = file_get_contents($this->link . $zipcode . ".json");

        return (array) json_decode($file);

    }
}
