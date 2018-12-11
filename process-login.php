<?php
session_start();
//receive username and passowrd
$email = $_POST['email'];
$password = $_POST['password'];

//check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";
// var_dump($_POST);

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `email` = '$email'
	AND `password` = '$password'");


$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to homepage
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['userid'] = $row['userid'];

	header("Location: homepage.php");

}else{
	//redirect to login page if invalid
	header("Location: login.php");
}
?>
