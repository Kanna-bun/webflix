<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/hello', function() {
    return view('hello', [
        'name' => 'Fiorella',
        'numbers' => [1, 3, 7],
    ]);
});

Route::get('/au-revoir', function() {
    return view('good-bye');
});

Route::get('/a-propos', function() {
    return view('about', [
        'name' => 'A propos',
        'team' => ['Fiorella', 'Matthieu', 'Flore']
    ]);
});

Route::get('/a-propos/{user}', function($user) {
    return view('about-show', [
        'user' => $user,
    ]);
});