<?php

// if the register button is clicked
	$id = $_POST['id'];
	$program = $_POST['program'];

  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
	$stmt = $pdo->prepare("SELECT * FROM `information`");
  $stmt->execute();
 ?>

<!doctype html>
<html>
	<head>
		<title>Program list</title>
		<meta charset="utf-8" />
  </head>
	<body>

  <h1><?php echo($row["program"]);?>yes</h1>
    <table>
      <tr>
    <th>School</th>
    <th>Rating</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    </tr>
</table>
<select>
  <option>
    highest to lowest
  </option>
  <option>
    lowest to highest
  </option>

</select>
	</body>
</html>
<!--  use php for this-->
