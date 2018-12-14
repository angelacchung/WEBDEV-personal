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
	$stmt = $pdo->prepare("SELECT AVG(rating)
FROM `information` JOIN `reviews`ON `information`.`reviewid` = `reviews`.`id` WHERE `school` = 'McMaster University'");

  $stmt->execute();
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
  <?php
	while($row = $stmt->fetch()) {
	?>
<!--	test: ?php echo($row["id"]);?> -->
	<h3>Title:<?php echo($row["school"]); ?></h3>
	<p>Author:<?php echo($row["program"]); ?></p>
  <p><?php echo($row["rating"])?></p>
  <p><?php echo($row["AVG(rating)"])?></p>
			<?php
		}
			?>
		<h1>Accounting
		</h1>
    <?php while($row = $stmt->fetch()) {
    ?>
<p><?php echo($row["AVG(rating)"])?></p>
<?php
}
?>
    <a id="ratethis" href="../write-review.php">rate this</a>
    <section id="container">
    </section>

</div>
<script src="js/js.js"></script>
	</body>
  <?php
    include('footer.php')
  ?>

</html>
<!--  use php for this-->
