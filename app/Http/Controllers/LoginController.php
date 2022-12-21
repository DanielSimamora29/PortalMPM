<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index()
    {
        return view('login.login');
    }
    
    function logout(){
        session()->forget("Auth");
        return redirect()->route('home.index');
    }

    function login(Request $request)
    {           
        $username = $request->username;
        $password = $request->password;
        
        $users = Users::where("username", $username)->first();
        if ($users) {
            // Will do authentication 
            if (password_verify($password, $users->password)) {
                if ($users->roles) {
                    if ($users->roles->name === "SuperAdmin"){
                        $user = $users;
                        session()->put('Auth', $users);
                        return redirect()->route('DashboardSuperAdmin');
                    }
                    if ($users->roles->name === "Admin"){
                        $user = $users;
                        session()->put('Auth', $users);
                        return redirect()->route('DashboardAdmin');
                    }
                    if ($users->roles->name === "Pegawai"){
                        $user = $users;
                        session()->put('Auth', $users);
                        return redirect()->route('DashboardPegawai');
                    }
                }
            } else {
                return redirect()->back()->withErrors(["message" => "Password salah"])->withInput();
            }
        } else {
            return redirect()->back()->withErrors(["message" => "Username Tidak terdaftar"])->withInput();
       }
    }
}
