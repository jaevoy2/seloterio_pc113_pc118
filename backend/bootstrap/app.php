<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\PermissionMiddleware;
use App\Http\Middleware\AdminMiddleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        // allowed_origin: ['http://frontend-folder.test'],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'permission'=> PermissionMiddleware::class,
            'admin' => AdminMiddleware::class
        ]);
        // $middleware->alias([
        //
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
