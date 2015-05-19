<?php
	if(isset($_GET['trigger']) && $_GET['trigger'] == 1) {
		error_reporting(E_ALL);
		exec('gpio write 7 0');
		usleep(1000000);
		exec('gpio write 7 1');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Garage Opener</title>
		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina-display.png" />
		<link rel="stylesheet" href="/assets/stylesheets/screen.css" type="text/css">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/assets/js/script.js"></script>

	</head>
	<body>
		<header class="wrapper">
			<h1>Doorman<span class="beta">Beta</span></h1>
		</header>
		<div class="wrapper main">
			<div class="button-outside">
      	<button href='/?trigger=1' class="button">Open Door</button>
			</div>
		</div>
	</body>
</html>
