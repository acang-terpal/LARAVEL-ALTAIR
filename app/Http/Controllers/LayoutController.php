<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function getTopMenuPage(){
        return view('page_layout_topmenu',["activeSidebarMain" => "layout_top_menu", "bodyClass" => "top_menu"]);
    }

    public function getHeaderFullPage(){
        return view('page_layout_headerfull',["activeSidebarMain" => "layout_header_full", "bodyClass" => "sidebar_main_open sidebar_main_swipe header_full"]);
    }
}
