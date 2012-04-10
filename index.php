<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>lhost - Welcome To Your Development Server</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="twelve columns centered" id="tophead">
            	<ul class="nav-bar">
                    <li>
                        <a href="http://localhost/" class="main">LocalHost Home</a>
                        </li>
                    <li class="has-flyout">
                        <a href="#" class="main">Local Admin Tools</a>
                        <a href="#" class="flyout-toggle"><span></span></a>
                        <div class="flyout small">
                            <h5>The ToolBox</h5>
							<ul>
                            	<li><a href="http://localhost/phpmyadmin" class="main" target="_blank">phpMyAdmin</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-flyout">
                        <a href="#" class="main">Nav Item 3</a>
                        <a href="#" class="flyout-toggle"><span></span></a>
                        <div class="flyout">
                            Content...
                        </div>
                    </li>
                    <li class="has-flyout">
                        <a href="#" class="main">Nav Item 4</a>
                        <a href="#" class="flyout-toggle"><span></span></a>
                        <div class="flyout large right">
                                Content...
                        </div>
                    </li>
                </ul> <!-- /# nav-bar -->
            </div> <!-- /# tophead -->
		<div class="row">
			<div class="twelve columns">
				<h2>Locally Hosted:</h2>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<!-- Grid Example -->
				<div class="row">
				</div>
				<div class="row">
					<div class="three columns">
						<div class="panel">
							<a href="http://localhost/localsites/ryflyinfo" target="_blank"><h5>RyFly.info</h5></a>
                            	<p>Local Wordpress Theme Dev Environment</p>
						</div>
					</div>
					<div class="three columns">
						<div class="panel">
							<a href="#" target="_blank"><h5>Site Name</h5></a>
						</div>
					</div>
					<div class="three columns">
						<div class="panel">
							<a href="#" target="_blank"><h5>Site Name</h5></a>
						</div>
					</div>
					<div class="three columns">
						<div class="panel">
							<a href="#" target="_blank"><h5>Site Name</h5></a>
						</div>
					</div>                    
		</div>
    </div> <!-- /# container -->

	<!-- Included JS Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.foundation.js"></script>
	<script src="js/foundation.js"></script>
	<script src="js/app.js"></script>

</body>
</html>
