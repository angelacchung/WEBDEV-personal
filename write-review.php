<?php
$id = $_POST['id'];

$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT * FROM `reviews` WHERE id = $id");
$stmt->execute();
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form class="form" method='POST' action='process-review.php'>
  <input type="hidden" value="<?php echo($row["id"]==1); ?>" name="id"/>
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
  <div>
  <input type="submit">
</form>

</body>
</html>
