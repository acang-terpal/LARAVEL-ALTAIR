<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendouiController extends Controller
{
    public function getKendouiAutocompletePage(){
        return view('kendoui_autocomplete',["activeSidebarMain" => "kendoui_autocomplete", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
