<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function dashboard(){
        if(Auth::user()->roles->name == 'SuperAdmin'){
            return redirect()->route('DashboardSuperAdmin');
        }
        if(Auth::user()->roles->name == 'Admin'){
            return redirect()->route('Admin.DashboardAdmin');
        }
        if(Auth::user()->roles->name == 'Pegawai'){
            return redirect()->route('Pegawai.DashboardPegawai');
        }
    }
}
