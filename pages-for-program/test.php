<?php

// if the register button is clicked
	$id = $_GET['id'];
	$program = $_GET['program'];

  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
	$stmt = $pdo->prepare("SELECT * FROM `information` WHERE `program` = 'Accounting' AND `id` = $id ");
  $stmt->execute();
 while($row = $stmt->fetch()){
 ?>
 <h1><?php echo($row["school"])?></h1>
 <h1><?php echo($row["department"])?></h1>
<?php
}
?>
