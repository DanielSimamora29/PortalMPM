<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if ($request->session()->get('Auth', null) !== null) {
            $users = session()->get('Auth', null);
            if ($users->roles) {
                if ($users->roles->name === "SuperAdmin") {
                    return redirect()->route('DashboardSuperAdmin');
                }
            } else {
                return redirect()->route('home.index');
            }
        } else {
            $users = null;
        }
        return $next($request);
    }
}
