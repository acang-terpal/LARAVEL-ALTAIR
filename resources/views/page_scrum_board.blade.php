@extends('layout.master')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link rel="icon" type="image/png" href="altair/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="altair/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.7.0</title>


    <!-- uikit -->
    <link rel="stylesheet" href="altair/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="altair/assets/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="altair/assets/css/style_switcher.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="altair/assets/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="altair/assets/css/themes/themes_combined.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
            <script type="text/javascript" src="altair/bower_components/matchMedia/matchMedia.js"></script>
            <script type="text/javascript" src="altair/bower_components/matchMedia/matchMedia.addListener.js"></script>
            <link rel="stylesheet" href="altair/assets/css/ie.css" media="all">
        <![endif]-->
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('sidebar_main')
    @include('layout.sidebar_main')
@endsection

@section('content')
    <div id="page_content" class="uk-height-1-1">

        <div class="scrum_board_overflow">
            <div id="scrum_board" class="uk-clearfix">
                <div>
                    <div class="scrum_column_heading_wrapper">
                        <div class="scrum_column_heading"> To Do</div>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><a href="#new_task" data-uk-modal="{ center:true }">Add task</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Edit Column</a></li>
                                    <li><a href="#" class="uk-text-danger">Delete Column</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="scrum_column">
                        <div id="scrum_column_todo">
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-6</a></h3>
                                    <p class="scrum_task_description">Et dolorum aliquid enim delectus libero dolorem autem
                                        iure.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Brionna Roob</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task critical">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-67</a></h3>
                                    <p class="scrum_task_description">Inventore dolor debitis iure quis unde et fuga impedit
                                        expedita et.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Weldon Hamill</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-43</a></h3>
                                    <p class="scrum_task_description">Quibusdam asperiores consequuntur autem error rerum
                                        aut.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Rickie Hamill</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading_wrapper">
                        <div class="scrum_column_heading">In analysis</div>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><a href="#new_task" data-uk-modal="{ center:true }">Add task</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Edit Column</a></li>
                                    <li><a href="#" class="uk-text-danger">Delete Column</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="scrum_column">
                        <div id="scrum_column_inAnalysis">
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-101</a></h3>
                                    <p class="scrum_task_description">Doloribus saepe perferendis rerum officia dicta qui
                                        itaque magnam velit.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Jarod Volkman</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-150</a></h3>
                                    <p class="scrum_task_description">Molestias quis illo cum et ut reprehenderit modi.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Sienna Goyette</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task blocker">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-111</a></h3>
                                    <p class="scrum_task_description">Dolore commodi hic est culpa natus sed autem tenetur
                                        rerum.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Josianne Greenfelder</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task blocker">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-83</a></h3>
                                    <p class="scrum_task_description">Corporis et ducimus aspernatur asperiores qui ab qui
                                        ab velit aliquid.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Jonatan Lang</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-134</a></h3>
                                    <p class="scrum_task_description">Facere qui doloribus est eum quisquam debitis illo
                                        libero voluptatem.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Seth Powlowski</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading_wrapper">
                        <div class="scrum_column_heading">In progress</div>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><a href="#new_task" data-uk-modal="{ center:true }">Add task</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Edit Column</a></li>
                                    <li><a href="#" class="uk-text-danger">Delete Column</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="scrum_column">
                        <div id="scrum_column_inProgress">
                            <div>
                                <div class="scrum_task blocker">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-268</a></h3>
                                    <p class="scrum_task_description">Soluta sit sit cupiditate ullam natus.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Nigel Franecki</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task critical">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-191</a></h3>
                                    <p class="scrum_task_description">Amet neque ut et ut perferendis autem.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Jace Cremin</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading_wrapper">
                        <div class="scrum_column_heading">Done</div>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><a href="#new_task" data-uk-modal="{ center:true }">Add task</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Edit Column</a></li>
                                    <li><a href="#" class="uk-text-danger">Delete Column</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="scrum_column">
                        <div id="scrum_column_done">
                            <div>
                                <div class="scrum_task critical">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-306</a></h3>
                                    <p class="scrum_task_description">Cumque officia corporis animi deleniti eos quis
                                        accusantium laborum.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Myrtle Ziemann</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task critical">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-359</a></h3>
                                    <p class="scrum_task_description">Laboriosam rem culpa numquam voluptatum inventore.
                                    </p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Barton Fadel</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task blocker">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-331</a></h3>
                                    <p class="scrum_task_description">Quasi et eum recusandae reiciendis sed dolorem qui
                                        ex.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Virginia Reichert</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="scrum_task minor">
                                    <h3 class="scrum_task_title"><a href="#task_info"
                                            data-uk-modal="{ center:true }">Altair-299</a></h3>
                                    <p class="scrum_task_description">Pariatur et impedit deserunt consequatur id facilis
                                        voluptates deleniti.</p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a
                                            href="#">Murray Kub</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="#new_task" data-uk-modal="{ center:true }">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <div class="uk-modal" id="new_task">
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">ALTAIR-</h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Title</label>
                    <input type="text" class="md-input" id="Task_title" name="snippet_title" />
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_description">Description</label>
                    <textarea class="md-input" id="task_description" name="task_description"></textarea>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_assignee" class="uk-form-label">Assignee</label>
                    <select class="uk-form-width-medium" name="task_assignee" id="task_assignee"
                        data-md-selectize-inline>
                        <option value="user_me">Me</option>
                        <option value="user_1">Mohammad Kemmer</option>
                        <option value="user_2">Bradley Collier</option>
                        <option value="user_3">Erica Daugherty</option>
                        <option value="user_4">Alexys Hills</option>
                    </select>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_priority" class="uk-form-label">Priority</label>
                    <div>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_minor" data-md-icheck />
                            <label for="task_priority_minor" class="inline-label uk-badge uk-badge-success">MINOR</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_critical" data-md-icheck />
                            <label for="task_priority_critical"
                                class="inline-label uk-badge uk-badge-warning">CRITICAL</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_blocker" data-md-icheck />
                            <label for="task_priority_blocker"
                                class="inline-label uk-badge uk-badge-danger">BLOCKER</label>
                        </span>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close md-btn-wave">Close</button><button
                        type="button" class="md-btn md-btn-flat md-btn-flat-primary md-btn-wave"
                        id="snippet_new_save">Add Task</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-modal" id="task_info">
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <span class="uk-badge uk-badge-danger uk-float-right">Blocker</span>
                <h3 class="uk-modal-title">ALTAIR-</h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Title</p>
                    <p class="uk-margin-remove uk-text-large">Corrupti sit qui voluptatem aut sunt dignissimos esse quas
                        nemo.</p>
                </div>
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Description</p>
                    <p class="uk-margin-remove">Optio dolorem doloribus ipsa similique expedita nihil ipsa placeat mollitia
                        libero quod doloribus qui ea cum aut molestias et sint aut impedit atque recusandae.</p>
                </div>
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Assignee</p>
                    <p class="uk-margin-remove">Jonas Bednar</p>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close md-btn-wave">Close</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('sidebar_secondary')
    @include('layout.sidebar_secondary')
@endsection

@section('script_bottom')
    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="altair/assets/js/common.js"></script>
    <!-- uikit functions -->
    <script src="altair/assets/js/uikit_custom.js"></script>
    <!-- altair common functions/helpers -->
    <script src="altair/assets/js/altair_admin_common.js"></script>

    <!-- page specific plugins -->
    <!-- dragula.js -->
    <script src="altair/bower_components/dragula.js/dist/dragula.js"></script>

    <!--  scrum board functions -->
    <script src="altair/assets/js/pages/page_scrum_board.min.js"></script>

    <script>
        $(function() {
            if (isHighDensity) {
                // enable hires images
                altair_helpers.retina_images();
            }
            if (Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>
@endsection

@section('style_switcher')
    <div id="style_switcher">
        <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
        <div class="uk-margin-medium-bottom">
            <h4 class="heading_c uk-margin-bottom">Colors</h4>
            <ul class="switcher_app_themes" id="theme_switcher">
                <li class="app_style_default active_theme" data-app-theme="">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_a" data-app-theme="app_theme_a">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_b" data-app-theme="app_theme_b">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_c" data-app-theme="app_theme_c">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_d" data-app-theme="app_theme_d">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_e" data-app-theme="app_theme_e">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_f" data-app-theme="app_theme_f">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_g" data-app-theme="app_theme_g">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_h" data-app-theme="app_theme_h">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_i" data-app-theme="app_theme_i">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_dark" data-app-theme="app_theme_dark">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
            </ul>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Sidebar</h4>
            <p>
                <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
                <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
            </p>
            <p>
                <input type="checkbox" name="style_sidebar_slim" id="style_sidebar_slim" data-md-icheck />
                <label for="style_sidebar_slim" class="inline-label">Slim Sidebar</label>
            </p>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Layout</h4>
            <p>
                <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
                <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
            </p>
        </div>
        <div class="uk-visible-large">
            <h4 class="heading_c">Main menu accordion</h4>
            <p>
                <input type="checkbox" name="accordion_mode_main_menu" id="accordion_mode_main_menu" data-md-icheck />
                <label for="accordion_mode_main_menu" class="inline-label">Accordion mode</label>
            </p>
        </div>
    </div>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $slim_sidebar_toggle = $('#style_sidebar_slim'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $html = $('html'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $html
                    .removeClass(
                        'app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i app_theme_dark'
                        )
                    .addClass(this_theme);

                if (this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                    if (this_theme == 'app_theme_dark') {
                        $('#kendoCSS').attr('href',
                            'altair/altair/altair/bower_components/kendo-ui/styles/kendo.materialblack.min.css'
                            )
                    }
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if ($switcher.hasClass('switcher_active')) {
                    if (
                        (!$(e.target).closest($switcher).length) ||
                        (e.keyCode == 27)
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if (localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme=' + localStorage.getItem("altair_theme") + ']').click();
            }


            // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if ((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem(
                    "altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });

            // toggle slim sidebar

            // change input's state to checked if mini sidebar is active
            if ((localStorage.getItem("altair_sidebar_slim") !== null && localStorage.getItem(
                    "altair_sidebar_slim") == '1') || $body.hasClass('sidebar_slim')) {
                $slim_sidebar_toggle.iCheck('check');
            }

            $slim_sidebar_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_slim", '1');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_slim');
                    location.reload(true);
                });

            // toggle boxed layout

            if ((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") ==
                'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

            // main menu accordion mode
            if ($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function() {
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function() {
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
@endsection
