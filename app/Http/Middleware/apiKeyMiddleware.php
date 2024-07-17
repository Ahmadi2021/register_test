<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class apiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = 'helloatg';
        if ($request->header('API_KEY') !== $apiKey) {
            return response()->json([
                'status' => 0,
                'message' => 'Invalid API key',
            ], 401);
        }

        return $next($request);
    }
}
