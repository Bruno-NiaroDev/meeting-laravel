<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        // Aqui eu poderia criar uma logica
        // Verificar se um usuário existe
        // Buscar dados, etc..
        $data = [
            'nome' => 'Brunin',
            'sobrenome' => 'Araujo',
            'idade' => 22,
            'apelido' => 'Brunin',
            'signo' => 'Gemeos'
        ];
        return view('bemvindo', $data);
    }

    public function logout(){

        return view('exit');
    }
}

