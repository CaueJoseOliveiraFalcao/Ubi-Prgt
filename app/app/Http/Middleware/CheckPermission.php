<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckPermission
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user->can('admin')){
            abort(403, 'Unauthorized action.');
        }
        
        return $next($request);
    }
}
