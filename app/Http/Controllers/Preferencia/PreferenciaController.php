<?php

namespace App\Http\Controllers\Preferencia;

use App\Http\Controllers\Controller;
use App\SkulaAPI\Preferencia\Preferencia;
use Illuminate\Http\Request;

class PreferenciaController extends Controller
{
    public function buscaPreferencias(Preferencia $preferencia)
    {
        $preferencias = $preferencia->buscaPreferencias();

        var_dump($preferencias);
    }
}
