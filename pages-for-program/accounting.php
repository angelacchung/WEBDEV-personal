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
	$row = $stmt->fetch();
 ?>
 <?php
 	include('header.php')
 ?>

		<link rel="stylesheet" type="text/css" href="css/main.css" />

	<body>
    <div id="divId"></div>
            <form  action='process-order.php' method='post'>
              <select name ="order" id="descend">
                <option>null</option>
                <option value="desc">descend</option>
                <option value="asc">ascend</option>
              </select>
            <!-- <input type="text" name="ratingg"/>
            <button type="submit">submit</button> -->
    <!-- <p id="descend" value="desc">hello</p> -->

          </form>
<div class="cont">


		<h1><?php echo($row["program"])?>
		</h1>
    <section id="container">
    </section>
    <table id="table">
      <tr>
		<th>Rating</th>
    <th>School</th>
		<!-- <th><select>
		  <option>
		    highest to lowest
		  </option>
		  <option>
		    lowest to highest
		  </option>

		</select></th> -->
  </tr>
	<?php	while($row = $stmt->fetch()) {
		?>
	 <tr>
		 <td id="r"><?php echo($row["rating"])?></td>
    <td id="s"><a href="view.php"><?php echo($row["school"])?></a></td>
  </tr>
<?}?>
</table>
</div>
<script src="js/js.js"></script>
	</body>
  <?php
    include('footer.php')
  ?>

</html>
<!--  use php for this-->
