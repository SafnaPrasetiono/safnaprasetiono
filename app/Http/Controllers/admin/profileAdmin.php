<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileAdmin extends Controller
{
    // show index profile
    public function index()
    {
        return view('admin.profile.index');
    }
}
