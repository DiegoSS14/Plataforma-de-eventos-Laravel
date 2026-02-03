<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    return view(
        'contact', [
            'nome'=> 'Diego', 'idade' => 22, 'profissao' => 'Desenvolvedor Full Stack',
            'nomes' => ['Maria', 'Davi', 'Rafaela', 'Carlos', 'Antônio'],
            'numeros' => [1, 2, 3, 4, 5, 6, 7, 8],
            ]);
});

Route::get('/products', function() {

    // Pega query params do path e aramazena na variável
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/product/{id?}', function($id = null) {
    return view('product', ['id' => $id]);
});
