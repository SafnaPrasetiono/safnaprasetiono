<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // home pages admin
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
}
