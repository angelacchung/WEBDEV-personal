<?php
// if the register button is clicked
	$id = $_POST['id'];
	$rating = $_['rating'];
//This is the page that has the list of all the schools that share the program Accounting
//list: ratings and school
  // connect to the database
  $dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
  $dbusername = "chunmini_angela";
  $dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $stmt = $pdo->prepare("SELECT * FROM `reviews` WHERE `school` = 'McMaster University' AND `program` = 'English' ORDER BY `id` DESC");
  $stmt->execute();
  $stmtt = $pdo->prepare("SELECT AVG(rating) FROM `reviews` WHERE `school` = 'McMaster University'");
  $stmtt->execute();
  $row = $stmtt->fetch()
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!-- <link rel="stylesheet" href="header.css" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
  </head>

  <header>
  <nav>
    <ul>
      <li><a class="list" href="../homepage.php">Home</a></li>
      <!-- <li><a class="list" href="about.html">About</a></li> -->
      <li><a class="list" href="../login-page.php">Login</a></li>
      <li><a class="list" href="../register.php">Register</a></li>
    </ul>
  </nav>
  </header>
  <body>
    <div class="contain">
  <h1>English</h1>
  <h3>Average rating</h3>

  <h3><?php echo($row["AVG(rating)"])?></h3>
  <h3>McMaster University</h3>
  <a class="accbtn" href="https://english.humanities.mcmaster.ca/undergraduate-programs/undergraduate-studies-in-english/">Program details</a>
  <a class="accbtn" href="../write-review.php">Review it</a>
  <!-- customer reviews -->

  <?php
  while($row = $stmt->fetch()) {
  ?><div class="userreview">
  <h3>"<?php echo($row["title"]);?>"</h3>
  <p>Rating:<?php echo($row["rating"]); ?></p>
  <p>"<?php echo($row["content"]);?>"</p>

  </div>

      <?php
    }
      ?>
</div>
 </body>
 <footer class="footer">
   <ul>
     <li href="#">Contact</li>
     <li href="#">Help</li>
     <li href="#">Terms and conditions</li>
   </ul>
 </footer>
 </html>
</html>
<!--  use php for this-->
