<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            $user = User::with('permissions')->find(Auth::id());
                if($user->permissions[0]->name == 'Manage User'){
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
