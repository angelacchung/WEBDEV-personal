<?php
session_start();
//receive username and passowrd
$username = $_POST['username'];
$password = $_POST['password'];

//check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";
// var_dump($_POST);

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `username` = '$username'
	AND `password` = '$password'");


$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to homepage
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['userid'] = $row['userid'];

	header("Location: homepage.php");

}else{
	//redirect to login page if invalid
	header("Location: login.php");
}
?>
