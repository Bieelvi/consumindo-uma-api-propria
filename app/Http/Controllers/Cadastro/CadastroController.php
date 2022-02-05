<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Login\LoginController;
use App\SkulaAPI\Login\Login;
use App\SkulaAPI\Preferencia\Preferencia;
use App\SkulaAPI\Tipo\Tipo;
use App\SkulaAPI\Usuario\Usuarios;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    public function index(Preferencia $preferencia, Tipo $tipo): View
    {
        $preferencias = $preferencia->buscaPreferencias();
        $tipos = $tipo->buscaTipos();

        return View('cadastro.index', compact('preferencias', 'tipos'));
    }

    public function store(Request $request, Usuarios $usuario, LoginController $loginController)
    {
        $arrayUsuario = [
            'primeiroNome' => $request->primeiro_nome,
            'ultimoNome' => $request->ultimo_nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'genero' => $request->genero,
            'dataNascimento' => $request->data_nascimento,
            'canalRegistro' => $request->canal_registro,
            'profissao' => $request->profissao,
            'escolaridade' => $request->escolaridade,
            'telefone' => $request->telefone,
            'cpf' => $request->cpf,
            'descricaoPerfil' => $request->descricao_perfil,
            'pais' => $request->pais,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'cep' => $request->cep,
            'numeroCasa' => $request->numero_casa,
            'complemento' => $request->complemento
        ];

        $usuario->cadastroUsuario($arrayUsuario);

        return \redirect('/login');
    }
}
