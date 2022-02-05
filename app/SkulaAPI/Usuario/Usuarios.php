<?php 

namespace App\SkulaAPI\Usuario;

class Usuarios 
{
    public function cadastroUsuario(array $user)
    {
        $curl = curl_init();

        $headers = [            
            'Content-Type: application/json'
        ];

        $data = [
            'first_name' => $user['primeiroNome'],
            'last_name' => $user['ultimoNome'],
            'email' => $user['email'],
            'password' => $user['senha'],
            'profile_description' => $user['descricaoPerfil'],
            'genre' => $user['genero'],
            'birthdate' => $user['dataNascimento'],
            'registration_channel' => $user['canalRegistro'],
            'profession' => $user['profissao'],
            'schooling' => $user['escolaridade'],
            'telephone' => $user['telefone'],
            'cpf' => $user['cpf'],
            'country' => $user['pais'],
            'state' => $user['estado'],
            'city' => $user['cidade'],
            'district' => $user['bairro'],
            'street' => $user['rua'],
            'cep' => $user['cep'],
            'house_number' => $user['numeroCasa'],
            'complement' => $user['complemento'],
            'preferences' => null,
            'matters' => null
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:8080/user',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }

    public function buscaUsuarios(string $token): string
    {
        $curl = curl_init();

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:8080/user',
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers 
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    public function buscaUsuario(int $id, string $token): string
    {
        $curl = curl_init();

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost:8080/user/{$id}",
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers 
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    public function deletaUsuario(int $id, string $token): string
    {
        $curl = curl_init();

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost:8080/user/{$id}",
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers 
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}