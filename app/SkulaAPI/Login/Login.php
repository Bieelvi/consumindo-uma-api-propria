<?php 

namespace App\SkulaAPI\Login;

class Login 
{
    public function login(string $email, string $password)
    {
        $curl = curl_init();

        $headers = [            
            'Content-Type: application/json'
        ];

        $data = [
            "email" => $email,
            "password" => $password
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:8080/login',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }

    public function recuperaSenha(string $email)
    {
        $curl = curl_init();

        $headers = [            
            'Content-Type: application/json'
        ];

        $data = [
            "email" => $email
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:8080/recover_password',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }

    public function novaSenha(int $id, string $hash, string $password)
    {
        $curl = curl_init();

        $headers = [            
            'Content-Type: application/json'
        ];

        $data = [
            "password" => $password
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost:8080/email/recover_password/{$id}/{$hash}",
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }
}