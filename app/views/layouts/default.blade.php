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
        <![endif]-->
        <!--[if gt IE 8]><!-->
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-min.css'); }}
        <!--<![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--NAV SIDEBAR-->
        
    </body>
</html>