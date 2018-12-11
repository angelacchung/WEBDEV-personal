<?php

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
