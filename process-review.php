<?php
// var_dump($_POST);
//inserting rating into a specific row
  $rating = $_POST['rating'];
  $review = $_POST['review'];
  // $school = $_POST['school'];
  // $program = $_POST['program'];
  // $title = $_POST['title'];
  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);

  $stmt = $pdo->prepare("INSERT INTO `information` (`id`,`rating`)
  VALUES (NULL, '$rating'); ");

  //working
  // $stmt = $pdo->prepare("INSERT INTO `reviews` (`id`, `title`, `rating`, `review`, `school`, `program`)
  // VALUES (NULL, '$title', '$rating', '$review', '$school', '$program'); ");

  $stmt->execute();
  // header("Location: homepage.php");

?>
