<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        return view('Admin.Dashboard.dashboard');
    }
}
