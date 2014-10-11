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
			{{ HTML::style('css/layouts/jquery.mCustomScrollbar.css') }}
			
			{{ HTML::script('js/jquery-2.1.1.js') }}	
			{{ HTML::script('js/jquery.mCustomScrollbar.concat.min.js') }}
        <!--<![endif]-->
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	<div id="all">
		<div id="layout">
			<!-- Menu toggle -->
			<a href="#menu" id="menuLink" class="menu-link">
				<!-- Hamburger icon -->
				<span></span>
			</a>
			<div id="menu" >
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="#"><b>Lorem Ipsum</b></a>
								<ul class="accmenu" >
								
										<li><a href="#">Inventory</a></li>
										<li><a href="#">Sales</a></li>
										<li><a href="#">Reports</a></li>
								</ul>
								<ul class="accmenu">
											<li id="subitem1"><a href="#"> &#9654;  Inventory logs</a></li>
											<li id="subitem2"><a href="#"> &#9654; Payment logs </a></li>
											<li id="subitem3"><a href="#"> &#9654; Delivery logs </a></li>
								</ul>
								<ul class="accmenu" >
										<li><a href="#">Account Settings </a></li>
										<li><a href="#">Sign Out </a></li>

								</ul>
				</div>
			</div>
		</div>
		
		<div id="maincontent">
			<div class="header" style="padding-top: 1em">
			{{ HTML::image('Cavitech.png') }}
			</div>

			<div class="content" style="color: #1A1A1A; font-size: 12px">
			{{ HTML::image('homepicture.png') }}
            <center><h2 class="content-subhead" ><b>WE ARE CAVITECH ENTERPRISE</b></h2></center>
            <p><i>"Amidst the challenges of a competitive business environment, we will foster a performance driven culture, 
			render the best service to our clients and committed to share the benefits to our personnel and to society as well, 
			for the realization of our vision."<i></p>
			</div>
		</div>
			</div>
</div>
	{{ HTML::script('js/js.js') }}
	{{ HTML::script('js/ui.js') }}
	{{ HTML::script('js/scrollbar.js') }}
    </body>
</html>