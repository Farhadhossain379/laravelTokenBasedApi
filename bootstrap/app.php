<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Add a global middleware to bypass CSRF for API routes
        $middleware->add(function (Request $request, $next) {
            if ($request->is('api/*')) {
                // Bypass CSRF for API routes
                $request->session()->regenerateToken();
            }
            return $next($request);
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
