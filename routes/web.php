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

// Route::fallback(function(){
//     return '404';
// });

//-----------------------------
// route parameters
//-----------------------------

Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);
Route::get('/valores/{value1}/{value2}', [MainController::class, 'mostrarVAlores']);
Route::get('/valores2/{value1}/{value2}', [MainController::class, 'mostrarVAlores2']);

Route::get('/opcional/{value?}', [MainController::class, 'mostrarValorOpcional']);
Route::get('/opcional2/{value1}/{value?}', [MainController::class, 'mostrarValorOpcional2']);
Route::get('/user/{user_id}/post/{post_id}', [MainController::class, 'mostrarPosts']);


//--------------------------------------------------------------------------
//------------ROUTE PARAMETERS WITH CONSTRAINTS-----------------------------
//--------------------------------------------------------------------------

Route::get('/exp/{value}', function($value){
    echo $value;
})->where('value', '[0-9]+');

Route::get('/exp2/{value}', function($value){
    echo $value;
})->where('value', '[A-Za-z0-9]+');

Route::get('/exp3/{value1}/{value2}', function($value1, $value2){
    echo "Valor1 = $value1 e Valor2 = $value2";
})->where([
    'value1' => '[0-9]+',
    'value2' => '[A-Za-z0-9]+'
]);