<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        if ($request->session()->get('Auth', null) !== null) {
            $users = session()->get('Auth', null);
            if ($users->roles) {
                if ($users->roles->name === "SuperAdmin") {
                    return redirect()->route('DashboardSuperAdmin');
                }
                if ($users->roles->name === "Admin") {
                    return redirect()->route('DashboardAdmin');
                }
                if ($users->roles->name === "Pegawai") {
                    return redirect()->route('DashboardPegawai');
                }
            } else {
                return redirect()->route('DashboardPegawai');
            }
        }  
        return $next($request);
    }
}
