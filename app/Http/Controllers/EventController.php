<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view(
            'welcome',
            [
                'nome' => 'Diego',
                'idade' => 22,
                'profissao' => 'Desenvolvedor Full Stack',
                'nomes' => ['Maria', 'Davi', 'Rafaela', 'Carlos', 'Antônio'],
                'numeros' => [1, 2, 3, 4, 5, 6, 7, 8],
            ]
        );
    }

    public function create() {
        $name = request('event');

        return view('events.create', ['event' => $name]);
    }
}
