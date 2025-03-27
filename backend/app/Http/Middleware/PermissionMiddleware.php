<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Hash;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try{
            $user = Auth::user();
                if($user){
                    return $next($request);
                }else{
                    return response()->json(['message' => 'Unauthorized'], 401);
                }
        }catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        }
    }
}
