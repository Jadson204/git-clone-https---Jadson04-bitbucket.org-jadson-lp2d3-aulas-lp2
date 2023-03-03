<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//base url == localhost/pizza/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('public.login');
});

Route::get('/landing', function () {
    return view('public.landing');
});

//localhost/pizza/cardapio
Route::get('/cardapio', function () {  //criando uma nova rota
    return view('cardapio');
});

//http://localhost/pizza/template
//Route::get('/template', function () {  //criando uma nova rota
 //   return view('common.basic-template');
//});

Route::get('/home', function () {  //criando uma nova rota
    return view('home');
});
?>