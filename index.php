<?php
	if(isset($_GET['trigger']) && $_GET['trigger'] == 1) {
		error_reporting(E_ALL);
		exec('gpio write 7 0');
		usleep(1000000);
		exec('gpio write 7 1');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doorman Beta</title>
		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina-display.png" />
		<link rel="stylesheet" href="/assets/stylesheets/screen.css" type="text/css">

		<script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/assets/js/script.js"></script>

		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<header class="wrapper">
			<h1>Doorman<span class="beta">Beta</span></h1>
		</header>



		<?php
		error_reporting(E_ALL ^ E_NOTICE);

			// Define your username and password
			$password = '0007';

			if ($_POST['txtPassword'] != $password) {

				?>

				<div class="wrapper main">

					<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				   <label for="txtpassword">Password:</label>
				    <input title="Enter your password" name="txtPassword" type="number" pattern="[0-9]*" />
				    <input type="submit" name="Submit" value="Login" class="button" />
					</form>
				</div>

				<?php
				}

			else {
			?>

			<div class="wrapper main">
	    	<a href='/?trigger=1' class="button closed"></a>
			</div>

			<?php
			}
		?>

		<footer>
			Raspberry Pi Powered
		</footer>
	</body>
</html>
