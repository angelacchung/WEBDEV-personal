<?php

// if the register button is clicked
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  // connect to the database
  $dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $stmt->execute();



    $stmt = $pdo->prepare("INSERT INTO `users` (`firstname`, `lastname`, `email`, `username`, `password`)
    VALUES ('$firstname', '$lastname', '$email', '$username', '$password');");

    $stmt->execute();
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
  // }


  header("Location: homepage.php")


 ?>
