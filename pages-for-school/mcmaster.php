<?php $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";
// var_dump($_POST);
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT * FROM `information` WHERE `school` = 'McMaster University' ");
$stmt->execute();
$row = $stmt->fetch();
?>
<?php
	include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/main.css" />

  <div class="cont">
  		<h1><?php echo($row["school"])?>
  		</h1>
      <table>
        <tr>
  		<th>Rating</th>
      <th>Programs</th>
  		<th><select>
  		  <option>
  		    highest to lowest
  		  </option>
  		  <option>
  		    lowest to highest
  		  </option>

  		</select></th>
    </tr>
  	<?php	while($row = $stmt->fetch()) {
  		?>
  	 <tr>
  		 <td><?php echo($row["rating"])?></td>
      <td><?php echo($row["program"])?></td>
    </tr>
  <?}?>
  </table>

  </div>
  	</body>
  </html>
