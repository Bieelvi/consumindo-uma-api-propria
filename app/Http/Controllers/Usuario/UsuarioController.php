<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\SkulaAPI\Usuario\Usuarios;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Session\Session;

class UsuarioController extends Controller
{
    public function index(Usuarios $usuario, Session $session): View
    {
        $usuarios = json_decode($usuario->buscaUsuarios($session->get('token')));

        $usuarios = $usuarios->response;

        return View('usuarios.index', compact('usuarios'));
    }

    public function buscaUsuario(int $id, Usuarios $usuario, Session $session): View
    {
        $usuario = json_decode($usuario->buscaUsuario($id, $session->get('token')));
        
        return View('usuarios.perfil', compact('usuario'));
    }

    public function deletaUsuario(int $id, Usuarios $usuario, Session $session)
    {
        $usuario = json_decode($usuario->deletaUsuario($id, $session->get('token')));

        return \redirect('/usuario');
    }
}