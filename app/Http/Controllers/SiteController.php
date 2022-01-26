<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        // Aqui eu poderia criar uma logica
        // Verificar se um usuário existe
        // Buscar dados, etc..
        $nome = 'Brunin';
        $idade = 90;
        return view('bemvindo', [
            'apelido_nome' => $nome,
            'idade' => $idade
        ]);
    }

    public function logout(){

        return view('exit');
    }
}

