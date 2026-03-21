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