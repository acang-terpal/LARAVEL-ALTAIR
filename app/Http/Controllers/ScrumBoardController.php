<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrumBoardController extends Controller
{
    public function getPage(){
        return view('page_scrum_board',["activeSidebarMain" => "scrum_board", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
