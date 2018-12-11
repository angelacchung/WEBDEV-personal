<?php

// if the register button is clicked
	// $id = $_POST['id'];
	// $program = $_['program'];
//This is the page that has the list of all the schools that share the program Accounting
//list: ratings and school
  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
	$stmt = $pdo->prepare("SELECT * FROM `information` WHERE `program` = 'Accounting' ");
  $stmt->execute();
 ?>

<!doctype html>
<html>
	<head>
		<title>Program list</title>
		<meta charset="utf-8" />
  </head>
	<body>

    <table>
      <tr>
    <th>School</th>
    <th>Rating</th>
  </tr>
	<?php	while($row = $stmt->fetch()) {
		?>
	 <tr>
    <td><?php echo($row["school"])?></td>
    <td><?php echo($row["rating"])?></td>
  </tr>
<?}?>
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
