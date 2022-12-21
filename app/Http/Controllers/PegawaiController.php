<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class PegawaiController extends Controller
{
    function index()
    {
        
        return view('Pegawai.DashboardPegawai');
    }

    function Profile(){
        return view('Pegawai.profilePegawai');
    }

    function setting(){
        return view('Pegawai.SettingAkunPegawai');
    }
    
}
