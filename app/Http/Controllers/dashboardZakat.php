<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\User;

class dashboardZakat extends Controller
{
    public function dashboardf()
    {
        $data = [
            'user' =>   User::all()
        ];
        return view("v_dashboard",$data);
    }
}
