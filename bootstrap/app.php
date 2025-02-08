<?php

use App\Http\Middleware\AdminEmailMiddleware;
use App\Http\Middleware\CheckAuthenticate;
use App\Http\Middleware\CommingSoonMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/status',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/');
        $middleware->alias([
            'admin.email' => AdminEmailMiddleware::class,
            'checkCommingSoon' => CommingSoonMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
