<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\SkulaAPI\Login\Login;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    private $login;
    private $session;

    public function __construct(Login $login, Session $session)
    {
        $this->login = $login;
        $this->session = $session;
    }

    public function index(): View
    {
        return View('login.index');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $token = $this->login->login($email, $password);

        if (!$token) {
            return \redirect()->back()->withErrors('Credenciais Incorretas');
        }

        $this->session->set('token', $token->token);

        return \redirect('/usuario');
    }
}
