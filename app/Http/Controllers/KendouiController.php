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
    
    public function getKendouiCombobox(){
        return view('kendoui_combobox',["activeSidebarMain" => "kendoui_combobox", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiDatepicker(){
        return view('kendoui_datepicker',["activeSidebarMain" => "kendoui_datepicker", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiDateTimepicker(){
        return view('kendoui_datetimepicker',["activeSidebarMain" => "kendoui_datetimepicker", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiDropDownList(){
        return view('kendoui_dropdownlist',["activeSidebarMain" => "kendoui_dropdown_list", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiMaskedInput(){
        return view('kendoui_maskedinput',["activeSidebarMain" => "kendoui_masked_input", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiMenu(){
        return view('kendoui_menu',["activeSidebarMain" => "kendoui_menu", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }

    public function getKendouiMultiSelect(){
        return view('kendoui_multiselect',["activeSidebarMain" => "kendoui_multiselect", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiNumericTextBox(){
        return view('kendoui_numerictextbox',["activeSidebarMain" => "kendoui_numeric_textbox", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiPanelBar(){
        return view('kendoui_panelbar',["activeSidebarMain" => "kendoui_panelbar", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiTimePicker(){
        return view('kendoui_timepicker',["activeSidebarMain" => "kendoui_timepicker", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiToolbar(){
        return view('kendoui_toolbar',["activeSidebarMain" => "kendoui_toolbar", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
    
    public function getKendouiWindow(){
        return view('kendoui_window',["activeSidebarMain" => "kendoui_window", "bodyClass" => "sidebar_main_open sidebar_main_swipe"]);
    }
}
