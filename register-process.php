<?php

//This is working
// if the register button is clicked
  $email = $_POST['email'];
  $password = $_POST['password'];
  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);

  $stmt = $pdo->prepare("INSERT INTO `users` (`email`, `password`)
  VALUES ('$email', '$password');");
  $stmt->execute();

//   if ($row= $stmt->fetch()){
//     $_SESSION['logged-in'] = true;
//     $_SESSION['email'] = $row['email'];
//     $_SESSION['id'] = $row['id'];
//     header("Location: homepage.php")
// }
// else{
//   header("Location: login-page.html")
// }
  // $stmt->execute();
  // $_SESSION['username'] = $username;
  // $_SESSION['success'] = "You are now logged in";
  // // }
  //
  header("Location: login-page.php")


 ?>
