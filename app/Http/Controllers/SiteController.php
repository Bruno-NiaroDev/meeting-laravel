<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        // Aqui eu poderia criar uma logica
        // Verificar se um usuário existe
        // Buscar dados, etc..
        return view('bemvindo');
    }
    }
//}
