<!--
Template for ever page
-->
<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
        </title>
        <!--STYLESHEETS-->
        <!--Using stylesheets in Public folder-->
        {{ HTML::style('css/cav/cav-style-general.css'); }} <!--Custom Styles That I Made-->
        {{ HTML::style('css/pure-release-0.5.0/pure-min.css'); }}
        <!--[if lte IE 8]>
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-old-ie-min.css'); }}
            {{ HTML::style('css/layouts/side-menu-old-ie.cs') }}
        <![endif]-->
        <!--[if gt IE 8]><!-->
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-min.css'); }}
            {{ HTML::style('css/layouts/side-menu.css') }}
        <!--<![endif]-->
        {{ HTML::script('js/ui.js') }}
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--NAV SIDEBAR-->
        <div clas="layout">
            <!--The menu itself-->
            <div id="menu">
                <div class="pure-menu pure-menu-open">
                    <a class="pure-menu-heading" href="{{ action('UserProfileController@show', Auth::user()->username) }}">
                        {{ Auth::user()->username }}
                    </a>
                </div>
            </div>
            <div id="main">
            
            </div>
        </div>
    </body>
</html>