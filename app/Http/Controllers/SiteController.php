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
            'apelido' => 'Brunin',
        ];
        return view('bemvindo', $data);
    }

    public function logout(){

        return view('exit');
    }

    public function users(Request $r){
        $data = [
            'quantidade' => $r->qnt
        ];
        return view('usuarios', $data);
    }
}

