<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class dashboardZakat extends Controller
{
    public function dashboardf()
    {

        return view("v_dashboard");
    }
}
