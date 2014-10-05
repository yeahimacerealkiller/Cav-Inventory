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
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
		<div id="layout">
			<!-- Menu toggle -->
			<a href="#menu" id="menuLink" class="menu-link">
				<!-- Hamburger icon -->
				<span></span>
			</a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="#"><h3>LoremIpsum</h3></a>
					<ul>
						<li><a href="#" tabindex="1"><b>Inventory</b></a></li> <!--"By giving it a tabindex you can make any element you
						like focusable. The focus and blur events should work on such elements." Works in all browsers: -->
						<li><a href="#" tabindex="2"><b>Purchase Orders</b></a></li>
						<li><a href="#" tabindex="3"><b>Supplier</b></a></li>
						<li><a href="#" tabindex="4"><b>Account Settings</b></a></li>
					</ul>
				</div>
			</div>

			<div id="main"></div>
		</div>
	{{ HTML::script('js/ui.js') }}
    </body>
</html>