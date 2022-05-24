<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\AssertableJson;

class homeController extends Controller
{
    // show home pages
    public function home(){
        return view('home');
    }

    public function education($id, $sluger){
        return view('pages.education');
    }
}
