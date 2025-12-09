<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getPage(){
        return view('index',["activeSidebarMain" => "dashboard", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
