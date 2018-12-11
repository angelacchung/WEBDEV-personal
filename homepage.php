<?php
// session_start();
// if($_SESSION['logged-in'] == false){
	$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

  $stmt = $pdo->prepare("INSERT INTO `users` (`email`, `password`)
  VALUES ('$email', '$password');");
  $stmt->execute();
	?>
	<!--
	)
}else{


}

?> -->
<!doctype html>
<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<!-- <script src="js/js.js" type="text/javascript"></script> -->
	</head>
	<body>
    <header>
		<nav>
			<ul>
				<li><a href="homepage.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="login-page.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
			</ul>
		</nav>
		</header>
		<div id="cont">
		<h1>Welcome!</h1>
<div>
	<p>Choose to search by...</p>
</div>
<div>
<a href="program.html">Programs</a>
<a href="university.html">Schools</a>
<a href="showall.html">Show All</a>
</div>
</div>
	</body>
	<footer>
		<ul>
			<li href="#">link</li>
			<li href="#">link</li>
			<li href="#">link</li>
		</ul>
	</footer>
</html>
