<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailBoxController extends Controller
{
    public function getPage(){
        return view('mailbox', ["activeSidebarMain" => "mailbox", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
