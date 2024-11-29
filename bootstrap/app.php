<?php

use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StarMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //adiciona a todas as rotas
        // $middleware->prepend([
        //     StarMiddleware::class
        //     // EndMiddleware::class
        // ]);
        // // adicionar no final de todas as respostas as rotas
        // $middleware->append([
        //     // StarMiddleware::class
        //     EndMiddleware::class
        // ]);
        //criar grupo de Middleware
        $middleware->prependToGroup('correr_antes',[
            StarMiddleware::class
        ]);
        $middleware->appendToGroup('correr_depois',[
            EndMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
