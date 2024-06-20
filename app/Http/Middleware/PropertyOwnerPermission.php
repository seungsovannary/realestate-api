<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class PropertyOwnerPermission
{
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $user = Auth::user();
        if ($user->role_id === "3") {
            throw new UnauthorizedException("Unauthorized");
        }
        return $next($request);
    }
}
