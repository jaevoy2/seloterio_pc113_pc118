<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($credentials = User::where('email', $request->email)->first()){
            if($credentials->role == 0){
                return $next($request);
            }else{
                return response()->json(['message' => 'Unauthorized'], 401);
            }
        }
        return response()->json([
            'message' => 'Unknown user'
        ], 401);
    }
}
