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


class AdminController extends Controller
{
    function index()
    {
        return view('Admin.DashboardAdmin');
    }

    function Profile(){
        return view('Admin.profileAdmin');
    }

    function setting(){
        return view('Admin.SettingAkunAdmin');
    }
}
