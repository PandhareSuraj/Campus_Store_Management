<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role->role_name;

        switch ($role) {

            case 'hod':
                return view('dashboards.hod');

            case 'principal':
                return view('dashboards.principal');

            case 'trust_head':
                return view('dashboards.trust_head');

            case 'provider':
                return view('dashboards.provider');

            default:
                return view('dashboards.user');
        }
    }
}