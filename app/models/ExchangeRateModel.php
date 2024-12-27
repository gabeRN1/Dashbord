<?php

class ExchangeRateModel {
    private $apiKey = '7f70e76d00431e58b717eccc';
    private $url = "https://v6.exchangerate-api.com/v6/7f70e76d00431e58b717eccc/latest/USD";


    public function getExchangeRates() {
        $response =      $response = @file_get_contents($this->url); // O @ suprime erros de warnings
        $data = json_decode($response, true);
        if (isset($data['conversion_rates'])){
            return $data['conversion_rates'];
        }
        
    }
}