<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class AdminRoleMiddleware
{

    private function isAdmin($request)
    {
        return $request->user() && $request->user()->role === 'admin';
    }
    
    public function handle(Request $request, Closure $next)
    {

        if (! $this->isAdmin($request)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized.',
            ], 401);
        }

        return $next($request);
    }



}
