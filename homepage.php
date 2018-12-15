<?php
session_start();

if($_SESSION['logged-in'] == false){
  ?>
<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="header.css" /> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
</head>
<body>
<header>
<nav>
  <ul>
    <li><a class="list" href="homepage.php">Home</a></li>
    <!-- <li><a class="list" href="about.html">About</a></li> -->
    <li><a class="list" href="login-page.php">Login</a></li>
    <li><a class="list" href="register.php">Register</a></li>
  </ul>
</nav>
</header>
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<!-- <script src="js/js.js" type="text/javascript"></script> -->

		<div id="cont">
      <h1>Find the right education for you</h1>
	<div class="cont">
		<p>See what others are saying about university programs in Ontario</p>

	<div>
	<a href="program.php">Get started</a>
<!-- <a href="university.php">School names</a>
<a href="showall.php">Show All</a> -->
</div>
</div>
</div>
	</body>
  <footer>
    <ul>
      <li href="#">Contact</li>
      <li href="#">Help</li>
      <li href="#">Terms and conditions</li>
    </ul>
  </footer>
  </html>
	<?php
}
else
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
	  <!-- <link rel="stylesheet" href="header.css" /> -->
	  <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
	</head>
	<body>
	<header>
	<nav>
	  <ul>
	    <li><a class="list" href="homepage.php">Home</a></li>
	    <!-- <li><a class="list" href="about.html">About</a></li> -->
	    <li><a class="list" href="log-out.php">Logout</a></li>
	    <li><a class="list" href="register.php">Register</a></li>
	  </ul>
	</nav>
	</header>
			<link rel="stylesheet" type="text/css" href="css/homepage.css" />
			<!-- <script src="js/js.js" type="text/javascript"></script> -->

			<div id="cont">
			<h1>Find the right education for you</h1>
	<div class="cont">
		<p>See what others are saying about university programs in Ontario</p>

	<div>
	<a href="program.php">Get started</a>
	<!-- <a href="university.php">School names</a>
	<a href="showall.php">Show All</a> -->
	</div>
	</div>
	</div>
		</body>
    <footer>
      <ul>
        <li href="#">Contact</li>
        <li href="#">Help</li>
        <li href="#">Terms and conditions</li>
      </ul>
    </footer>
    </html>
<?php
}
?>
