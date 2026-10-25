<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return 'Bonjour et bienvenue dans Laravel !';
});

Route::get('/bonjour-court', function () {
    return 'Salut !';
});

Route::get('/bienvenue', function () {
    return view('bienvenue');
});

Route::get('/version', function () {
    return app()->version();
});

Route::get('/heure', function () {
    return view('heure', [
        'date' => now()->format('d/m/Y'),
        'heure' => now()->format('H:i:s'),
    ]);
});

Route::get('/a-propos', function () {
    return view('a-propos', [
        'auteur' => 'Rana Ncibi',
        'groupe' => 'MDW32',
    ]);
});
