<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippetsController extends Controller
{
    public function getPage(){
        return view('snippets',["activeSidebarMain" => "snippets", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
