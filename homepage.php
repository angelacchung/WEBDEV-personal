<?php
// session_start();
// if($_SESSION['logged-in'] == false){
// 	$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
//   $dbusername = "chunmini_angela";
//   $dbpassword = "Z8c.N&]08u](";
//
// 	$pdo = new PDO($dsn, $dbusername, $dbpassword);
//
//   $stmt = $pdo->prepare("INSERT INTO `users` (`email`, `password`)
//   VALUES ('$email', '$password');");
//   $stmt->execute();
	?>
	<!--
	)
}else{


}

?> -->
<?php
	include('header.php')
?>
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<!-- <script src="js/js.js" type="text/javascript"></script> -->

		<span id="cont">
		<h1>Welcome!</h1>
<div>
	<p>Choose to search by...</p>
</div>
<div>
<a href="program.php">Programs</a>
<a href="university.php">Schools</a>
<a href="showall.php">Show All</a>
</div>
</span>
	</body>
	<?php
		include('footer.php')
	?>
