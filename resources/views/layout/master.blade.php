<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        @yield("head")

    </head>
    <body class="{{ $bodyClass }}">

        @yield("header")

        @yield('sidebar_main')

        @yield('content')

        @yield('sidebar_secondary')

        @yield("script_bottom")

        @yield("style_switcher")
    </body>
</html>