<?php 

namespace App\SkulaAPI\Preferencia;

class Preferencia 
{
    public function buscaPreferencias()
    {
        $curl = curl_init();

        $headers = [            
            'Content-Type: application/json'
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:8080/preference',
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }
}