<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getPage(){
        return view('chat', ["activeSidebarMain" => "chat", "bodyClass" => "sidebar_main_open sidebar_main_swipe header_double_height"]);
    }
}
