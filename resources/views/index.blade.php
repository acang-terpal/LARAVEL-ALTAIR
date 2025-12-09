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

    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="altair/bower_components/weather-icons/css/weather-icons.min.css" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="altair/bower_components/metrics-graphics/dist/metricsgraphics.css">
    <!-- chartist -->
    <link rel="stylesheet" href="altair/bower_components/chartist/dist/chartist.min.css">

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
            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show"
                data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                    class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (last 7d)</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                    class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Sale</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                    class="peity_orders peity_data">64/100</span></div>
                            <span class="uk-text-muted uk-text-small">Orders Completed</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                    class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                            <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- large chart -->
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Chart
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="mGraph-wrapper">
                                <div id="mGraph_sale" class="mGraph" data-uk-check-display></div>
                            </div>
                            <div class="md-card-fullscreen-content">
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-no-border uk-text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Best Seller</th>
                                                <th>Total Sale</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>January 2014</td>
                                                <td>Eius et dolor vero.</td>
                                                <td>$3 234 162</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>February 2014</td>
                                                <td>Rerum quia reprehenderit.</td>
                                                <td>$3 771 083</td>
                                                <td class="uk-text-success">+2.5%</td>
                                            </tr>
                                            <tr>
                                                <td>March 2014</td>
                                                <td>Est ipsa ipsum quasi.</td>
                                                <td>$2 429 352</td>
                                                <td class="uk-text-danger">-4.6%</td>
                                            </tr>
                                            <tr>
                                                <td>April 2014</td>
                                                <td>Provident nihil inventore.</td>
                                                <td>$4 844 169</td>
                                                <td class="uk-text-success">+7%</td>
                                            </tr>
                                            <tr>
                                                <td>May 2014</td>
                                                <td>Doloremque sed officia praesentium.</td>
                                                <td>$5 284 318</td>
                                                <td class="uk-text-success">+3.2%</td>
                                            </tr>
                                            <tr>
                                                <td>June 2014</td>
                                                <td>Qui dolore perspiciatis maxime.</td>
                                                <td>$4 688 183</td>
                                                <td class="uk-text-danger">-6%</td>
                                            </tr>
                                            <tr>
                                                <td>July 2014</td>
                                                <td>Provident doloribus eius.</td>
                                                <td>$4 353 427</td>
                                                <td class="uk-text-success">-5.3%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some
                                    Info:</p>
                                <p class="uk-margin-top-remove">Ea et quas numquam aperiam assumenda consequatur blanditiis
                                    sequi nostrum dolores ut et rerum vitae harum dolor atque enim veniam quo porro
                                    laudantium eius deserunt dolorem aut vitae modi inventore quo vitae in unde sunt
                                    voluptatem totam in qui debitis et reprehenderit enim et quisquam quas autem optio
                                    laudantium sed et cupiditate natus adipisci officiis voluptatibus consequuntur aperiam a
                                    explicabo quibusdam tempore placeat porro cum quos vel sed asperiores est ex impedit
                                    voluptatem eius quidem cumque sit beatae consequatur perspiciatis ut repellendus id in
                                    ipsa iusto.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- circular charts -->
            <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler"
                id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE0BE;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    User Messages
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content uk-flex uk-flex-center uk-flex-middle">
                            <span class="peity_conversions_large peity_data">5,3,9,6,5,9,7</span>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Conversions
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay md-card-overlay-active">
                        <div class="md-card-content" id="canvas_1">
                            <div class="epc_chart" data-percent="37" data-bar-color="#9c27b0">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE85D;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Tasks List
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <button class="md-btn md-btn-primary">More</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="53" data-bar-color="#009688">
                                <span class="epc_chart_text"><span class="countUpMe">53</span>%</span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Orders
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content">
                            <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                            </div>
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    User Registrations
                                </h3>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </div>

            <!-- tasks -->
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th class="uk-text-nowrap">Task</th>
                                            <th class="uk-text-nowrap">Status</th>
                                            <th class="uk-text-nowrap">Progress</th>
                                            <th class="uk-text-nowrap uk-text-right">Due Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a
                                                    href="scrum_board.html">ALTR-231</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In
                                                    progress</span></td>
                                            <td class="uk-width-3-10">
                                                <div
                                                    class="uk-progress uk-progress-mini uk-progress-warning uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 40%;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">24.11.2015
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a
                                                    href="scrum_board.html">ALTR-82</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span
                                                    class="uk-badge uk-badge-warning">Open</span></td>
                                            <td class="uk-width-3-10">
                                                <div
                                                    class="uk-progress uk-progress-mini uk-progress-success uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 82%;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">21.11.2015
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a
                                                    href="scrum_board.html">ALTR-123</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span
                                                    class="uk-badge uk-badge-primary">New</span></td>
                                            <td class="uk-width-3-10">
                                                <div class="uk-progress uk-progress-mini uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 0;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a
                                                    href="scrum_board.html">ALTR-164</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span
                                                    class="uk-badge uk-badge-success">Resolved</span></td>
                                            <td class="uk-width-3-10">
                                                <div
                                                    class="uk-progress uk-progress-mini uk-progress-primary uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 61%;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">17.11.2015
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10 uk-text-nowrap"><a
                                                    href="scrum_board.html">ALTR-123</a></td>
                                            <td class="uk-width-2-10 uk-text-nowrap"><span
                                                    class="uk-badge uk-badge-danger">Overdue</span></td>
                                            <td class="uk-width-3-10">
                                                <div
                                                    class="uk-progress uk-progress-mini uk-progress-danger uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 10%;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015
                                            </td>
                                        </tr>
                                        <tr class="uk-table-middle">
                                            <td class="uk-width-3-10"><a href="scrum_board.html">ALTR-92</a></td>
                                            <td class="uk-width-2-10"><span class="uk-badge uk-badge-success">Open</span>
                                            </td>
                                            <td class="uk-width-3-10">
                                                <div class="uk-progress uk-progress-mini uk-margin-remove">
                                                    <div class="uk-progress-bar" style="width: 90%;"></div>
                                                </div>
                                            </td>
                                            <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-bottom">Statistics</h3>
                            <div id="ct-chart" class="chartist"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- info cards -->
            <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin
                data-uk-grid-match="{target:'.md-card-content'}">
                <div>
                    <div class="md-card">
                        <div class="md-card-head md-bg-light-blue-600">
                            <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
                                <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">User profile</a></li>
                                        <li><a href="#">User permissions</a></li>
                                        <li><a href="#" class="uk-text-danger">Delete user</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-text-center">
                                <img class="md-card-head-avatar" src="altair/assets/img/avatars/avatar_11.png"
                                    alt="" />
                            </div>
                            <h3 class="md-card-head-text uk-text-center md-color-white">
                                Otha Boyle <span>qbailey@gmail.com</span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">harry87@kohler.info</span>
                                        <span class="uk-text-small uk-text-muted">Email</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">643-788-8347</span>
                                        <span class="uk-text-small uk-text-muted">Phone</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">facebook.com/envato</span>
                                        <span class="uk-text-small uk-text-muted">Facebook</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon uk-icon-twitter"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">twitter.com/envato</span>
                                        <span class="uk-text-small uk-text-muted">Twitter</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-head">
                            <div id="video_player"></div>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon md-list-interactive" id="video_player_playlist">
                                <li data-video-src="-CYs99M7hzA">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Unboxing the HERO4</span>
                                        <span class="uk-text-small uk-text-muted">Mashable</span>
                                    </div>
                                </li>
                                <li data-video-src="te689fEo2pY">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Apple Watch Unboxing & Setup</span>
                                        <span class="uk-text-small uk-text-muted">Unbox Therapy</span>
                                    </div>
                                </li>
                                <li data-video-src="7AFJeaYojhU">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Energous WattUp Power Transmitter</span>
                                        <span class="uk-text-small uk-text-muted">TechCrunch</span>
                                    </div>
                                </li>
                                <li data-video-src="hajnEpCq5SE">
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon material-icons">&#xE037;</i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">The new MacBook - Design</span>
                                        <span class="uk-text-small uk-text-muted">Apple</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-head head_background"
                            style="background-image: url('altair/assets/img/gallery/Image17.jpg')">
                            <div class="md-card-head-menu">
                                <i class="md-icon material-icons md-icon-light">&#xE5D5;</i>
                            </div>
                            <h3 class="md-card-head-text">
                                Some City
                            </h3>
                            <div class="md-card-head-subtext">
                                <i class="md-card-head-icon wi wi-day-sunny-overcast uk-margin-right"></i>
                                <span>14&deg;</span>
                            </div>
                        </div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-sunny-overcast"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">22&deg; Mostly Sunny</span>
                                        <span class="uk-text-small uk-text-muted">29 Jun (Wednesday)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-cloudy"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">19&deg; Partly Cloudy</span>
                                        <span class="uk-text-small uk-text-muted">30 Jun (Thursday)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-rain"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">16&deg; Rainy</span>
                                        <span class="uk-text-small uk-text-muted">1 Jul (Friday)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <i class="md-list-addon-icon wi wi-day-sunny uk-text-warning"></i>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">24&deg; Sunny</span>
                                        <span class="uk-text-small uk-text-muted">1 Jul (Friday)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div id="clndr_events" class="clndr-wrapper">
                            <script>
                                // calendar events
                                clndrEvents = [{
                                        date: '2016-06-08',
                                        title: 'Doctor appointment',
                                        url: 'javascript:void(0)',
                                        timeStart: '10:00',
                                        timeEnd: '11:00'
                                    },
                                    {
                                        date: '2016-06-09',
                                        title: 'John\'s Birthday',
                                        url: 'javascript:void(0)'
                                    },
                                    {
                                        date: '2016-06-09',
                                        title: 'Party',
                                        url: 'javascript:void(0)',
                                        timeStart: '08:00',
                                        timeEnd: '08:30'
                                    },
                                    {
                                        date: '2016-06-13',
                                        title: 'Meeting',
                                        url: 'javascript:void(0)',
                                        timeStart: '18:00',
                                        timeEnd: '18:20'
                                    },
                                    {
                                        date: '2016-06-18',
                                        title: 'Work Out',
                                        url: 'javascript:void(0)',
                                        timeStart: '07:00',
                                        timeEnd: '08:00'
                                    },
                                    {
                                        date: '2016-06-18',
                                        title: 'Business Meeting',
                                        url: 'javascript:void(0)',
                                        timeStart: '11:10',
                                        timeEnd: '11:45'
                                    },
                                    {
                                        date: '2016-06-23',
                                        title: 'Meeting',
                                        url: 'javascript:void(0)',
                                        timeStart: '20:25',
                                        timeEnd: '20:50'
                                    },
                                    {
                                        date: '2016-06-26',
                                        title: 'Haircut',
                                        url: 'javascript:void(0)'
                                    },
                                    {
                                        date: '2016-06-26',
                                        title: 'Lunch with Katy',
                                        url: 'javascript:void(0)',
                                        timeStart: '08:45',
                                        timeEnd: '09:45'
                                    },
                                    {
                                        date: '2016-06-26',
                                        title: 'Concept review',
                                        url: 'javascript:void(0)',
                                        timeStart: '15:00',
                                        timeEnd: '16:00'
                                    },
                                    {
                                        date: '2016-06-27',
                                        title: 'Swimming Poll',
                                        url: 'javascript:void(0)',
                                        timeStart: '13:50',
                                        timeEnd: '14:20'
                                    },
                                    {
                                        date: '2016-06-29',
                                        title: 'Team Meeting',
                                        url: 'javascript:void(0)',
                                        timeStart: '17:25',
                                        timeEnd: '18:15'
                                    },
                                    {
                                        date: '2016-07-02',
                                        title: 'Dinner with John',
                                        url: 'javascript:void(0)',
                                        timeStart: '16:25',
                                        timeEnd: '18:45'
                                    },
                                    {
                                        date: '2016-07-13',
                                        title: 'Business Meeting',
                                        url: 'javascript:void(0)',
                                        timeStart: '10:00',
                                        timeEnd: '11:00'
                                    }
                                ]
                            </script>
                            <script id="clndr_events_template" type="text/x-handlebars-template">
                                    @verbatim
                                    <div class="md-card-toolbar">
                                    <div class="md-card-toolbar-actions">
                                    <i class="md-icon clndr_add_event material-icons">&#xE145;</i>
                                    <i class="md-icon clndr_today material-icons">&#xE8DF;</i>
                                    <i class="md-icon clndr_previous material-icons">&#xE408;</i>
                                    <i class="md-icon clndr_next material-icons uk-margin-remove">&#xE409;</i>
                                    </div>
                                    <h3 class="md-card-toolbar-heading-text">
                                    {{ month }} {{ year }}
                                    </h3>
                                    </div>
                                    <div class="clndr_days">
                                    <div class="clndr_days_names">
                                    {{#each daysOfTheWeek}}
                                    <div class="day-header">{{ this }}</div>
                                    {{/each}}
                                    </div>
                                    <div class="clndr_days_grid">
                                    {{#each days}}
                                    <div class="{{ this.classes }}" {{#if this.id }} id="{{ this.id }}" {{/if}}>
                                    <span>{{ this.day }}</span>
                                    </div>
                                    {{/each}}
                                    </div>
                                    </div>
                                    <div class="clndr_events">
                                    <i class="material-icons clndr_events_close_button">&#xE5CD;</i>
                                    {{#each eventsThisMonth}}
                                    <div class="clndr_event" data-clndr-event="{{ dateFormat this.date format='YYYY-MM-DD' }}">
                                    <a href="{{ this.url }}">
                                    <span class="clndr_event_title">{{ this.title }}</span>
                                    <span class="clndr_event_more_info">
                                    {{~dateFormat this.date format='MMM Do'}}
                                    {{~#ifCond this.timeStart '||' this.timeEnd}} ({{/ifCond}}
                                    {{~#if this.timeStart }} {{~this.timeStart~}} {{/if}}
                                    {{~#ifCond this.timeStart '&&' this.timeEnd}} - {{/ifCond}}
                                    {{~#if this.timeEnd }} {{~this.timeEnd~}} {{/if}}
                                    {{~#ifCond this.timeStart '||' this.timeEnd}}){{/ifCond~}}
                                    </span>
                                    </a>
                                    </div>
                                    {{/each}}
                                    </div>
                                    @endverbatim
                                </script>
                        </div>
                        <div class="uk-modal" id="modal_clndr_new_event">
                            <div class="uk-modal-dialog">
                                <div class="uk-modal-header">
                                    <h3 class="uk-modal-title">New Event</h3>
                                </div>
                                <div class="uk-margin-bottom">
                                    <label for="clndr_event_title_control">Event Title</label>
                                    <input type="text" class="md-input" id="clndr_event_title_control" />
                                </div>
                                <div class="uk-margin-medium-bottom">
                                    <label for="clndr_event_link_control">Event Link</label>
                                    <input type="text" class="md-input" id="clndr_event_link_control" />
                                </div>
                                <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-large-bottom" data-uk-grid-margin>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i
                                                    class="uk-input-group-icon uk-icon-calendar"></i></span>
                                            <label for="clndr_event_date_control">Event Date</label>
                                            <input class="md-input" type="text" id="clndr_event_date_control"
                                                data-uk-datepicker="{format:'YYYY-MM-DD', minDate: '2016-06-28' }">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i
                                                    class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                            <label for="clndr_event_start_control">Event Start</label>
                                            <input class="md-input" type="text" id="clndr_event_start_control"
                                                data-uk-timepicker>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i
                                                    class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                            <label for="clndr_event_end_control">Event End</label>
                                            <input class="md-input" type="text" id="clndr_event_end_control"
                                                data-uk-timepicker>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-modal-footer uk-text-right">
                                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button
                                        type="button" class="md-btn md-btn-flat md-btn-flat-primary"
                                        id="clndr_new_event_submit">Add Event</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div id="map_users_controls"></div>
                        <div id="map_users" class="gmap"></div>
                        <div class="md-card-content">
                            <ul class="md-list md-list-addon gmap_list" id="map_users_list">
                                <li data-gmap-lat="37.406267" data-gmap-lon="-122.06742"
                                    data-gmap-user="Everardo Schaden"
                                    data-gmap-user-company="Murray, Johnson and D'Amore">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar"
                                            src="altair/assets/img/avatars/avatar_01_tn.png" alt="" />
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Everardo Schaden</span>
                                        <span class="uk-text-small uk-text-muted">Murray, Johnson and D'Amore</span>
                                    </div>
                                </li>
                                <li data-gmap-lat="37.379267" data-gmap-lon="-122.02148"
                                    data-gmap-user="Garrick Kautzer MD" data-gmap-user-company="Nader LLC">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar"
                                            src="altair/assets/img/avatars/avatar_02_tn.png" alt="" />
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Garrick Kautzer MD</span>
                                        <span class="uk-text-small uk-text-muted">Nader LLC</span>
                                    </div>
                                </li>
                                <li data-gmap-lat="37.410267" data-gmap-lon="-122.11048"
                                    data-gmap-user="Mckayla Eichmann" data-gmap-user-company="Toy, Ruecker and Klocko">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar"
                                            src="altair/assets/img/avatars/avatar_03_tn.png" alt="" />
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Mckayla Eichmann</span>
                                        <span class="uk-text-small uk-text-muted">Toy, Ruecker and Klocko</span>
                                    </div>
                                </li>
                                <li data-gmap-lat="37.397267" data-gmap-lon="-122.084417"
                                    data-gmap-user="Prof. Ari Corkery IV" data-gmap-user-company="Volkman Inc">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar"
                                            src="altair/assets/img/avatars/avatar_04_tn.png" alt="" />
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Prof. Ari Corkery IV</span>
                                        <span class="uk-text-small uk-text-muted">Volkman Inc</span>
                                    </div>
                                </li>
                                <li data-gmap-lat="37.372267" data-gmap-lon="-122.090417"
                                    data-gmap-user="Ms. Jackeline Jakubowski" data-gmap-user-company="Dare-Hickle">
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar"
                                            src="altair/assets/img/avatars/avatar_05_tn.png" alt="" />
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Ms. Jackeline Jakubowski</span>
                                        <span class="uk-text-small uk-text-muted">Dare-Hickle</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
    <script src="altair/assets/js/uikit_custom.js"></script>
    <!-- altair common functions/helpers -->
    <script src="altair/assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="altair/bower_components/d3/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="altair/bower_components/metrics-graphics/dist/metricsgraphics.js"></script>
    <!-- chartist (charts) -->
    <script src="altair/bower_components/chartist/dist/chartist.min.js"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="altair/bower_components/maplace-js/dist/maplace.min.js"></script>
    <!-- peity (small charts) -->
    <script src="altair/bower_components/peity/jquery.peity.min.js"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="altair/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- countUp -->
    <script src="altair/bower_components/countUp.js/dist/countUp.min.js"></script>
    <!-- handlebars.js -->
    <script src="altair/bower_components/handlebars/handlebars.min.js"></script>
    <script src="altair/assets/js/custom/handlebars_helpers.min.js"></script>
    <!-- CLNDR -->
    <script src="altair/bower_components/clndr/clndr.min.js"></script>
    <!-- fitvids -->
    <script src="altair/bower_components/fitvids/jquery.fitvids.js"></script>

    <!--  dashbord functions -->
    <script src="altair/assets/js/pages/dashboard.js"></script>

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
                            'altair/bower_components/kendo-ui/styles/kendo.materialblack.min.css')
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
