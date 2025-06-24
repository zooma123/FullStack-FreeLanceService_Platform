<?php

namespace App\Http\Middleware;

use Closure;

class HandelCors
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response
            ->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
}