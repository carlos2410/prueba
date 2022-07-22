<?php

namespace App\Http\Controllers;
use App\Models\personas;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function index()
    {
        $items = [
            
            'Formulario'       => ['url' => 'formulario'],
            'Lista'            => ['url' => 'listarpersonas'],
            'Iniciar Sesión'   => ['url' => 'login'],
            'Registrarme'      => ['url' => 'register'],
            'Opciciones'       => ['submenu' => [
                                    'about'     => [],
                                    'company'   => []
                                    ]
                                ]
        ];
        return view('menu-test', compact('items'));
    }
}

