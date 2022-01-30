<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PendenciasController extends Controller
{
    public function index(): View
    {   
        return View('adm.pendencias.index');
    }
}
