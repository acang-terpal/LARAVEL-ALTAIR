@section("sidebar_main")
<!-- main sidebar -->
<aside id="sidebar_main">

    @if($activeSidebarMain !='layout_top_menu' && $activeSidebarMain !='layout_header_full')
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="altair/assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="altair/assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="altair/assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="altair/assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
    @endif

    <div class="menu_section">
        <ul>
            <li title="Mailbox" class="{{ $activeSidebarMain == "dashboard" ? "current_section" : ""}}" >
                <a href="index">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li title="Mailbox" class="{{ $activeSidebarMain == "mailbox" ? "current_section" : ""}}" >
                <a href="mailbox">
                    <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                    <span class="menu_title">Mailbox</span>
                </a>
            </li>
            <li title="Invoices" class="{{ $activeSidebarMain == "invoice" ? "current_section" : ""}}">
                <a href="page_invoices">
                    <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                    <span class="menu_title">Invoices</span>
                </a>
            </li>
            <li title="Chat" class="{{ $activeSidebarMain == "chat" ? "current_section" : ""}}">
                <a href="page_chat">
                    <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                    <span class="menu_title">Chat</span>
                </a>
            </li>
            <li title="Scrum Board" class="{{ $activeSidebarMain == "scrum_board" ? "current_section" : ""}}">
                <a href="page_scrum_board">
                    <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                    <span class="menu_title">Scrum Board</span>
                </a>
            </li>
            <li title="Snippets" class="{{ $activeSidebarMain == "snippets" ? "current_section" : ""}}">
                <a href="page_snippets">
                    <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                    <span class="menu_title">Snippets</span>
                </a>
            </li>
            <li title="User Profile" class="{{ $activeSidebarMain == "user_profile" ? "current_section" : ""}}">
                <a href="page_user_profile">
                    <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                    <span class="menu_title">User Profile</span>
                </a>
            </li>
            <li title="Forms">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                    <span class="menu_title">Forms</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "forms_regular" ? "act_item" : ""}}"><a href="forms_regular">Regular Elements</a></li>
                    <li class="{{ $activeSidebarMain == "forms_advance" ? "act_item" : ""}}"><a href="forms_advanced">Advanced Elements</a></li>
                    <li class="{{ $activeSidebarMain == "forms_dynamic" ? "act_item" : ""}}"><a href="forms_dynamic">Dynamic</a></li>
                    <li class="{{ $activeSidebarMain == "forms_file_input" ? "act_item" : ""}}"><a href="forms_file_input">File Input</a></li>
                    <li class="{{ $activeSidebarMain == "forms_file_upload" ? "act_item" : ""}}"><a href="forms_file_upload">File Upload</a></li>
                    <li class="{{ $activeSidebarMain == "forms_validation" ? "act_item" : ""}}"><a href="forms_validation">Validation</a></li>
                    <li class="{{ $activeSidebarMain == "forms_wizard" ? "act_item" : ""}}"><a href="forms_wizard">Wizard</a></li>
                    <li class="menu_subtitle">WYSIWYG Editors</li>
                    <li class="{{ $activeSidebarMain == "forms_wysiwyg_ckeditor" ? "act_item" : ""}}"><a href="forms_wysiwyg_ckeditor">CKeditor</a></li>
                    <li class="{{ $activeSidebarMain == "forms_wysiwyg_inline" ? "act_item" : ""}}"><a href="forms_wysiwyg_inline">Ckeditor Inline</a></li>
                    <li class="{{ $activeSidebarMain == "forms_wysiwyg_tinymce" ? "act_item" : ""}}"><a href="forms_wysiwyg_tinymce">TinyMCE</a></li>
                </ul>
            </li>
            <li title="Layout">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                    <span class="menu_title">Layout</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "layout_top_menu" ? "act_item" : ""}}"><a href="layout_top_menu">Top Menu</a></li>
                    <li class="{{ $activeSidebarMain == "layout_header_full" ? "act_item" : ""}}"><a href="layout_header_full">Full Header</a></li>
                </ul>
            </li>
            <li title="Kendo UI Widgets">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                    <span class="menu_title">Kendo UI Widgets</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "kendoui_autocomplete" ? "act_item" : ""}}"><a href="kendoui_autocomplete">Autocomplete</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_calendar" ? "act_item" : ""}}"><a href="kendoui_calendar">Calendar</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_colorpicker" ? "act_item" : ""}}"><a href="kendoui_colorpicker">ColorPicker</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_combobox" ? "act_item" : ""}}"><a href="kendoui_combobox">ComboBox</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_datepicker" ? "act_item" : ""}}"><a href="kendoui_datepicker">DatePicker</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_datetimepicker" ? "act_item" : ""}}"><a href="kendoui_datetimepicker">DateTimePicker</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_dropdown_list" ? "act_item" : ""}}"><a href="kendoui_dropdown_list">DropDownList</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_masked_input" ? "act_item" : ""}}"><a href="kendoui_masked_input">Masked Input</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_menu" ? "act_item" : ""}}"><a href="kendoui_menu">Menu</a></li>
                    <li class="{{ $activeSidebarMain == "kendo_multiselect" ? "act_item" : ""}}"><a href="kendoui_multiselect">MultiSelect</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_numeric_textbox" ? "act_item" : ""}}"><a href="kendoui_numeric_textbox">Numeric TextBox</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_panelbar" ? "act_item" : ""}}"><a href="kendoui_panelbar">PanelBar</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_timepicker" ? "act_item" : ""}}"><a href="kendoui_timepicker">TimePicker</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_toolbar" ? "act_item" : ""}}"><a href="kendoui_toolbar">Toolbar</a></li>
                    <li class="{{ $activeSidebarMain == "kendoui_window" ? "act_item" : ""}}"><a href="kendoui_window">Window</a></li>
                </ul>
            </li>
            <li title="Components">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                    <span class="menu_title">Components</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "components_accordion" ? "act_item" : ""}}"><a href="components_accordion">Accordions</a></li>
                    <li class="{{ $activeSidebarMain == "components_autocomplete" ? "act_item" : ""}}"><a href="components_autocomplete">Autocomplete</a></li>
                    <li class="{{ $activeSidebarMain == "components_breadcrumbs" ? "act_item" : ""}}"><a href="components_breadcrumbs">Breadcrumbs</a></li>
                    <li class="{{ $activeSidebarMain == "components_buttons" ? "act_item" : ""}}"><a href="components_buttons">Buttons</a></li>
                    <li class="{{ $activeSidebarMain == "components_fab" ? "act_item" : ""}}"><a href="components_fab">Buttons: FAB</a></li>
                    <li class="{{ $activeSidebarMain == "components_cards" ? "act_item" : ""}}"><a href="components_cards">Cards</a></li>
                    <li class="{{ $activeSidebarMain == "components_colors" ? "act_item" : ""}}"><a href="components_colors">Colors</a></li>
                    <li class="{{ $activeSidebarMain == "components_common" ? "act_item" : ""}}"><a href="components_common">Common</a></li>
                    <li class="{{ $activeSidebarMain == "components_dropdowns" ? "act_item" : ""}}"><a href="components_dropdowns">Dropdowns</a></li>
                    <li class="{{ $activeSidebarMain == "components_dynamic_grid" ? "act_item" : ""}}"><a href="components_dynamic_grid">Dynamic Grid</a></li>
                    <li class="{{ $activeSidebarMain == "components_footer" ? "act_item" : ""}}"><a href="components_footer">Footer</a></li>
                    <li class="{{ $activeSidebarMain == "components_grid" ? "act_item" : ""}}"><a href="components_grid">Grid</a></li>
                    <li class="{{ $activeSidebarMain == "components_icons" ? "act_item" : ""}}"><a href="components_icons">Icons</a></li>
                    <li class="{{ $activeSidebarMain == "components_modal" ? "act_item" : ""}}"><a href="components_modal">Lightbox/Modal</a></li>
                    <li class="{{ $activeSidebarMain == "components_lists" ? "act_item" : ""}}"><a href="components_lists">Lists</a></li>
                    <li class="{{ $activeSidebarMain == "components_nestable" ? "act_item" : ""}}"><a href="components_nestable">Nestable</a></li>
                    <li class="{{ $activeSidebarMain == "components_notifications" ? "act_item" : ""}}"><a href="components_notifications">Notifications</a></li>
                    <li class="{{ $activeSidebarMain == "components_panel" ? "act_item" : ""}}"><a href="components_panels">Panels</a></li>
                    <li class="{{ $activeSidebarMain == "components_preloaders" ? "act_item" : ""}}"><a href="components_preloaders">Preloaders</a></li>
                    <li class="{{ $activeSidebarMain == "components_slider" ? "act_item" : ""}}"><a href="components_slider">Slider</a></li>
                    <li class="{{ $activeSidebarMain == "components_slideshow" ? "act_item" : ""}}"><a href="components_slideshow">Slideshow</a></li>
                    <li class="{{ $activeSidebarMain == "components_sortable" ? "act_item" : ""}}"><a href="components_sortable">Sortable</a></li>
                    <li class="{{ $activeSidebarMain == "components_switcher" ? "act_item" : ""}}"><a href="components_switcher">Switcher</a></li>
                    <li class="{{ $activeSidebarMain == "components_tables" ? "act_item" : ""}}"><a href="components_tables">Tables</a></li>
                    <li class="{{ $activeSidebarMain == "components_tables_examples" ? "act_item" : ""}}"><a href="components_tables_examples">Tables Examples</a></li>
                    <li class="{{ $activeSidebarMain == "components_tabs" ? "act_item" : ""}}"><a href="components_tabs">Tabs</a></li>
                    <li class="{{ $activeSidebarMain == "components_tooltips" ? "act_item" : ""}}"><a href="components_tooltips">Tooltips</a></li>
                    <li class="{{ $activeSidebarMain == "components_typography" ? "act_item" : ""}}"><a href="components_typography">Typography</a></li>
                </ul>
            </li>
            <li title="E-commerce">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                    <span class="menu_title">E-commerce</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "ecommerce_product_details" ? "act_item" : ""}}"><a href="ecommerce_product_details">Product Details</a></li>
                    <li class="{{ $activeSidebarMain == "ecommerce_product_edit" ? "act_item" : ""}}"><a href="ecommerce_product_edit">Product Edit</a></li>
                    <li class="{{ $activeSidebarMain == "ecommerce_product_grid" ? "act_item" : ""}}"><a href="ecommerce_product_grid">Products Grid</a></li>
                    <li class="{{ $activeSidebarMain == "ecommerce_product_list" ? "act_item" : ""}}"><a href="ecommerce_product_list">Products List</a></li>
                </ul>
            </li>
            <li title="Plugins">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                    <span class="menu_title">Plugins</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "plugins_calendar" ? "act_item" : ""}}"><a href="plugins_calendar">Calendar</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_charts" ? "act_item" : ""}}"><a href="plugins_charts">Charts</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_editor" ? "act_item" : ""}}"><a href="plugins_code_editor">Code Editor</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_crud_table" ? "act_item" : ""}}"><a href="plugins_crud_table">CRUD Table</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_datatables" ? "act_item" : ""}}"><a href="plugins_datatables">Datatables</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_diff" ? "act_item" : ""}}"><a href="plugins_diff">Diff View</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_filemanager" ? "act_item" : ""}}"><a href="plugins_filemanager">File Manager</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_gantt_chart" ? "act_item" : ""}}"><a href="plugins_gantt_chart">Gantt Chart</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_google_maps" ? "act_item" : ""}}"><a href="plugins_google_maps">Google Maps</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_idle_timeout" ? "act_item" : ""}}"><a href="plugins_idle_timeout">Idle Timeout</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_tour" ? "act_item" : ""}}"><a href="plugins_tour">Tour</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_tablesorter" ? "act_item" : ""}}"><a href="plugins_tablesorter">Tablesorter</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_tree" ? "act_item" : ""}}"><a href="plugins_tree">Tree</a></li>
                    <li class="{{ $activeSidebarMain == "plugins_vector_maps" ? "act_item" : ""}}"><a href="plugins_vector_maps">Vector Maps</a></li>
                </ul>
            </li>
            <li title="Pages">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                    <span class="menu_title">Pages</span>
                </a>
                <ul>
                    <li class="{{ $activeSidebarMain == "page_blank" ? "act_item" : ""}}"><a href="page_blank">Blank</a></li>
                    <li class="{{ $activeSidebarMain == "page_contact_list" ? "act_item" : ""}}"><a href="page_contact_list">Contact List</a></li>
                    <li class="{{ $activeSidebarMain == "page_gallery" ? "act_item" : ""}}"><a href="page_gallery">Gallery</a></li>
                    <li class="{{ $activeSidebarMain == "page_help" ? "act_item" : ""}}"><a href="page_help">Help/Faq</a></li>
                    <li class="{{ $activeSidebarMain == "page_login" ? "act_item" : ""}}"><a href="login">Login Page</a></li>
                    <li class="{{ $activeSidebarMain == "page_notes" ? "act_item" : ""}}"><a href="page_notes">Notes</a></li>
                    <li class="{{ $activeSidebarMain == "page_pricing_tables" ? "act_item" : ""}}"><a href="page_pricing_tables">Pricing Tables</a></li>
                    <li class="{{ $activeSidebarMain == "page_search_results" ? "act_item" : ""}}"><a href="page_search_results">Search Results</a></li>
                    <li class="{{ $activeSidebarMain == "page_settings" ? "act_item" : ""}}"><a href="page_settings">Settings</a></li>
                    <li class="{{ $activeSidebarMain == "page_todo" ? "act_item" : ""}}"><a href="page_todo">Todo</a></li>
                    <li class="{{ $activeSidebarMain == "page_user_edit" ? "act_item" : ""}}"><a href="page_user_edit">User edit</a></li>
                    <li class="menu_subtitle">Issue Tracker</li>
                    <li class="{{ $activeSidebarMain == "page_issue_list" ? "act_item" : ""}}"><a href="page_issue_list">List View</a></li>
                    <li class="{{ $activeSidebarMain == "page_issue_details" ? "act_item" : ""}}"><a href="page_issue_details">Issue Details</a></li>
                    <li class="menu_subtitle">Blog</li>
                    <li class="{{ $activeSidebarMain == "page_blog_list" ? "act_item" : ""}}"><a href="page_blog_list">Blog List</a></li>
                    <li class="{{ $activeSidebarMain == "page_blog_article" ? "act_item" : ""}}"><a href="page_blog_article">Blog Article</a></li>
                    <li class="menu_subtitle">Errors</li>
                    <li class="{{ $activeSidebarMain == "page_error_404" ? "act_item" : ""}}"><a href="error_404">Error 404</a></li>
                    <li class="{{ $activeSidebarMain == "page_error_500" ? "act_item" : ""}}"><a href="error_500">Error 500</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                    <span class="menu_title">Multi level</span>
                </a>
                <ul>
                    <li>
                        <a href="#">First level</a>
                        <ul>
                            <li>
                                <a href="#">Second Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Long title to test</a>
                                <ul>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Even longer title multi line</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside><!-- main sidebar end -->
@endsection