<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    // show setting panel
    public function setting(){
        $dataSet = json_decode(file_get_contents(public_path() . "/json/setting.json"), true);
        // dd($dataSet['navbar-colour']);
        return view('admin.pages.setting', [
            "dataSet" => $dataSet
        ]);
    }
}
