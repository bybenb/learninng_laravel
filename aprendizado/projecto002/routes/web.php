<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/h', function () {
    return view('home');
});


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/inimigos', function () {
    return view('enemies');
});


Route::get('/hokage', function () {
    return view('hokages');
});


Route::get('/hokage/{nome}', function ($nome) {
    return view('hokage', ['nome' => $nome]);
});





// AULA 4




Route::get('/ninjas', function () {
    return view('ninjas');
});




Route::post('/ninjas', function () {
    return 'Ninja Criado';
});



Route::put('/ninjas/{id}', function($id) {
    return "Ninja nº {$id} atualizado";
});


Route::patch('/ninja/{id}', function($id) {
    return "Ninja {$id} atualizado parcialmente";
    }
);


Route::delete('/ninjas/{id}', function ($id) {
    return "Ninja {$id} Morto...";
});



