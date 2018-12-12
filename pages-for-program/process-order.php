<?php
$id = $_POST["id"];
$rating = $_POST["rating"];
$order = $_POST["order"];
$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

if($order == "desc"){
  $stmttwo = $pdo->prepare("SELECT `rating`, `school` FROM `information` ORDER BY `rating` ASC"
);
}else{$order ==
  $stmttwo = $pdo->prepare("SELECT `rating`, `school` FROM `information` ORDER BY `rating` DESC"
);
}
$stmttwo->execute();

$results = $stmttwo->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);
// echo($_POST["order"]);
?>
