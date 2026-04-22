<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    // 1. Cek apakah user sudah login
    // 2. Cek apakah kolom is_admin di database bernilai true (1)
    if (auth()->check() && auth()->user()->is_admin) {
        return $next($request); // Jika admin, boleh lanjut
    }

    // Jika bukan admin, tendang ke halaman lain
    return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses admin.');
}
}
