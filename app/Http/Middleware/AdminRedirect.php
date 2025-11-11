<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Correct import
use Symfony\Component\HttpFoundation\Response;

class AdminRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ✅ Agar admin already logged in hai, to usko dashboard pe redirect karo
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        // ✅ Otherwise request normal flow me chala jaaye
        return $next($request);
    }
}
