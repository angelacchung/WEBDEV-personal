<?php
$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";
// var_dump($_POST);
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `information` WHERE `school` = 'Queens University'");
$stmt->execute();
$stmttwo = $pdo->prepare("SELECT * FROM `reviews` WHERE `school` = 'Queens University'");
$stmttwo->execute();
$row = $stmt->fetch();
?>
<?php
 include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Reviews</title>
    </head>
    <body>
      <h1>Reviews for accounting</h1>
      <h2><?php echo($row["school"])?></h2>
      <div class="reviews">
        <h3>Title</h3>
        <p>Rating:<?php echo($row["rating"])?><p>
        <p><?php echo($row["review"])?><p>
      </div>
      <!-- <h3>Average rating:<?php echo($row['rating'])?></h3> -->
    </body>
</html>
