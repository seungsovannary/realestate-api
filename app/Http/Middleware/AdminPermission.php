<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class AdminPermission
{
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $user = Auth::user();
        if ($user->role_id !== "1") {
            throw new UnauthorizedException("Unauthorized");
        }
        return $next($request);
    }
}
