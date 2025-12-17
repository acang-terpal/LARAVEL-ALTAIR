<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendouiController extends Controller
{
    public function getKendouiAutocompletePage(){
        return view('kendoui_autocomplete',["activeSidebarMain" => "kendoui_autocomplete", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }

    public function getKendouiCalendar(){
        return view('kendoui_calendar',["activeSidebarMain" => "kendoui_calendar", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }    
    
    public function getKendouiColorPicker(){
        return view('kendoui_colorpicker',["activeSidebarMain" => "kendoui_colorpicker", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
