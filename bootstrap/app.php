<?php

use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // Custom middleware aliases
        $middleware->alias([
            'admin.guest' => App\Http\Middleware\AdminRedirect::class,
            'admin.auth'  => Illuminate\Auth\Middleware\Authenticate::class,
        ]);

        // Redirect paths for guest/authenticated users
        $middleware->redirectTo(
            guests: '/user/login',
            users: '/user/dashboard',
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // You can handle custom exception logic here later
    })
    ->create();
