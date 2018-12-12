<?php
$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";
// var_dump($_POST);
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT AVG(`rating`) FROM `information` WHERE `program` = 'Computer Science' AND `school` = 'McMaster University' ");
$stmt->execute();
$row = $stmt->fetch();
?>
<?php
 include('header.php')
?>

<link rel="stylesheet" type="text/css" href="css/main.css" />
<!DOCTYPE html>
<html>
<head>
<title>Write a review</title>
</head>
<body>
<h1>Write a review</h1>
<form class="form" method='POST' action='process-review.php'>
  <!-- <input type="hidden" value="<?php //echo($row["id"]==1); ?>" name="id"/> -->
  <p>title</p>
  <p>average for computer science:<?php echo($row["rating"]);?></p>
  <input type="text" name="review">
  <p>choose a rating</p>
  <div>
  <input type="radio" value=1 name="rating">1
  <br>
  <input type="radio" value=2 name="rating">2
  <br>
  <input type="radio" value=3 name="rating">3
  <br>
  <input type="radio" value=4 name="rating">4
  <br>
</div>
  <div>
    McMaster University:<input type="radio" name="mcmaster">
    York University:<input type="radio" name="york">
  </div>
  <input id = "submit" type="submit">
</form>

</body>

</html>
<?php
  // include('footer.php')
?>
