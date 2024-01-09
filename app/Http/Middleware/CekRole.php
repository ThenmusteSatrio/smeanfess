<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $level)
    // : Response
    {
        if (!Auth::guard('web')->check()) {
            return redirect('/login');
        }
        $user = Auth::guard('web')->user();
        if ($user->role == $level) {
            return $next($request);
        }
        return abort(403, 'Unauthorized action.');
    }
}
