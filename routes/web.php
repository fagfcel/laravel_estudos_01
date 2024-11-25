<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//assinatura base de uma rota
//Route::verb('uri', callback); - o callback e a ação que vai ser executada quando a rota for acionada

//rota com função anônima
Route::get('/rota', function(){

     echo "<h1>Olá laravel</h1>";

} );

Route::get('/user', function(){

    return "<h1>Aqui está o usuario!!<h1>";
});

Route::get('/injection', function(Request $request){

    var_dump($request);
});

Route::match(['get', 'post'],'/match', function(){
    return "<h1>Aceita GET e POST</h1>";
});

Route::any('/any', function(){
    return '<h1>Aceita qualquer http verb!</h1>';
});

Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::redirect('/saltar', '/index');

Route::permanentRedirect('/saltar2', '/about');

Route::view('/view', 'home');

Route::view('view2', 'home', ['myName' => "Francisco Ferreira"]);

Route::fallback(function(){
    return '404';
});
