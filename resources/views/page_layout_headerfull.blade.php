
@extends('layout.master')

@section('head')
        <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="altair/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="altair/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.7.0</title>

    <!-- additional styles for plugins -->
    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="altair/bower_components/codemirror/lib/codemirror.css">
    
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

@section("header")
    @include("layout.header")
@endsection

@section('sidebar_main')
    @include('layout.sidebar_main')
@endsection

@section('content')
<div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Character Counter</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <label>Default</label>
                            <input type="text" class="input-count md-input" id="input_counter" maxlength="60" />
                        </div>
                        <div class="uk-width-medium-1-3">
                            <label>Error</label>
                            <input type="text" class="md-input md-input-danger input-count" maxlength="40" value="Something wrong" />
                        </div>
                        <div class="uk-width-medium-1-3">
                            <label>Success</label>
                            <input type="text" class="md-input md-input-success input-count" maxlength="40" value="All ok" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Sliders</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_1" name="ionslider_1" class="ion-slider" data-min1="0" data-max="100" data-from="50" />
                            <span class="uk-form-help-block">Basic</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_2" name="ionslider_2" class="ion-slider" data-min="0" data-max="1000" data-from="150" data-to="650" data-type="double" data-grid="true" data-prefix="$" />
                            <span class="uk-form-help-block">Double</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_3" name="ionslider_3" class="ion-slider" data-min="0" data-max="100" data-from="40" data-disable="true" />
                            <span class="uk-form-help-block">Disabled</span>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <input type="text" id="ionslider_movement_limit" name="ionslider_movement_limit" />
                            <span class="uk-form-help-block">Movement limit</span>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <input type="text" id="ionslider_date" name="ionslider_date" />
                            <span class="uk-form-help-block">Dates (using moment.js)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Advanced Selects</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <select id="selec_adv_1" name="selec_adv_1" multiple>
                                <option value="2" selected>Venus</option>
                                <option value="3" selected>Earth</option>
                            </select>
                        </div>
                        <div class="uk-width-large-1-2">
                            <select id="selec_adv_2" name="selec_adv_2" multiple>
                                <option value="">Select email...</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Datepicker</h3>
                            <div class="uk-grid">
                                <div class="uk-width-large-2-3 uk-width-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Select date</label>
                                        <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Timepicker</h3>
                            <div class="uk-grid">
                                <div class="uk-width-large-2-3 uk-width-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                        <label for="uk_tp_1">Select time</label>
                                        <input class="md-input" type="text" id="uk_tp_1" data-uk-timepicker>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Date range</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-large-1-3 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_start">Start Date</label>
                                        <input class="md-input" type="text" id="uk_dp_start">
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_end">End Date</label>
                                        <input class="md-input" type="text" id="uk_dp_end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-match="{target:'.md-card'}" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Password</h3>
                            <input type="password" class="md-input" value="password" />
                            <a href="" class="uk-form-password-toggle" data-uk-form-password>show</a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-bottom">Form file</h3>
                            <div class="uk-form-file md-btn md-btn-primary">
                                Select
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" type="file"></div>.
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Progressbars</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress">
                                <div class="uk-progress-bar" style="width: 40%;">40%</div>
                            </div>
                            <div class="uk-progress uk-progress-small">
                                <div class="uk-progress-bar" style="width: 20%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-mini">
                                <div class="uk-progress-bar" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-success uk-progress-small">
                                <div class="uk-progress-bar" style="width: 20%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-warning uk-progress-small">
                                <div class="uk-progress-bar" style="width: 40%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-danger uk-progress-small">
                                <div class="uk-progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-striped uk-active uk-progress-small">
                                <div class="uk-progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-success uk-progress-striped uk-active uk-progress-mini">
                                <div class="uk-progress-bar" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Masked inputs</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_date">Date</label>
                            <input class="md-input masked_input" id="masked_date" type="text" data-inputmask="'alias': 'mm/dd/yyyy'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_phone">Phone</label>
                            <input class="md-input masked_input" id="masked_phone" type="text" data-inputmask="'mask': '999 - 999 999 999'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_currency">Currency</label>
                            <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_email">Email</label>
                            <input class="md-input masked_input" id="masked_email" type="text" data-inputmask="'alias': 'email'" data-inputmask-showmaskonhover="false" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a uk-margin-bottom">Html Editor</h3>
                    <textarea data-uk-htmleditor="{ maxsplitsize:1220, codemirror : { mode: 'text/html' } }"><h1 class="heading_b">Heading</h1>

<p>Lorem ipsum dolor sit <strong>amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="uk-text-upper">This is a link</a></p>

<ul class="md-list">
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
</ul>

<div class="uk-alert" data-uk-alert>
  <a href="#" class="uk-alert-close uk-close"></a>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
</div></textarea>
                </div>
            </div>

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
    <script src="altair/assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="altair/assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="altair/assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- ionrangeslider -->
    <script src="altair/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>
    <!-- htmleditor (codeMirror) -->
    <script src="altair/assets/js/uikit_htmleditor_custom.min.js"></script>
    <!-- inputmask-->
    <script src="altair/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

    <!--  forms advanced functions -->
    <script src="altair/assets/js/pages/forms_advanced.min.js"></script>
    
    <script>
        $(function() {
            if(isHighDensity) {
                // enable hires images
                altair_helpers.retina_images();
            }
            if(Modernizr.touch) {
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
                            'altair/altair/altair/bower_components/kendo-ui/styles/kendo.materialblack.min.css')
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
