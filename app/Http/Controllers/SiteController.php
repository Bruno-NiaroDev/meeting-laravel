<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        $data = [
            'apelido' => 'Brunin',
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha',
                'ovos'
            ]
        ];
        return view('bemvindo', $data);
    }

}

