<?php

namespace App\Http\Controllers\Senha;

use App\Http\Controllers\Controller;
use App\SkulaAPI\Login\Login;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SenhaController extends Controller
{
    public function index(): View
    {
        return View('senha.index');
    }

    public function recuperarSenha(Request $request, Login $login): View
    {
        $email = $request->email;

        $login->recuperaSenha($email);

        return View('senha.espera', compact('email'));
    }

    public function novaSenha(): View
    {
        return View('senha.nova_senha');
    }

    public function store(int $id, string $hash, Request $request, Login $login)
    {
        $response = $login->novaSenha($id, $hash, $request->senha);

        if (!$response) {
            return \redirect()->back();
        } 

        return \redirect('/usuario');
    }
}
