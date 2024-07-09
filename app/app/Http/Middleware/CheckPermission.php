<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckPermission
{
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        $permission = substr($path, strrpos($path, '/') + 1);
        $user = Auth::user();
        if ($user === null) {
            abort(403, 'Unauthorized action.');
        }
        
        return $next($request);
    }
}
