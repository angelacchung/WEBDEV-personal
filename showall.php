<?php
// var_dump($_POST);

$rating = $_POST['rating'];
$review = $_POST['review'];
  // $school = $_POST['school'];
  // $program = $_POST['program'];
  // $title = $_POST['title'];
  // connect to the database
$dsn = "mysql:host=localhost;dbname=chunmini_personal;charset=utf8mb4";
$dbusername = "chunmini_angela";
$dbpassword = "Z8c.N&]08u](";
  // var_dump($_POST);
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT * FROM `information` ORDER BY `school` ASC");
$stmttwo = $pdo->prepare("SELECT * FROM `reviews` ");
$stmt->execute();
$stmttwo->execute();
$row = $stmttwo->fetch();
  ?>
  <?php
 include('header.php')
 ?>

   <link rel="stylesheet" type="text/css" href="css/main.css" />
   <!DOCTYPE html>
   <html>
   <head>
   <title>Show all lists</title>
   </head>
   <body>
   <h1>All programs</h1>
   <table>
     <tr>
   <th>Rating</th>
   <th>Program</th>
   <th>School</th>
     </tr>
   <?php	while($row = $stmt->fetch()) {
   ?>
   <tr>
    <td id="r"><?php echo($row["rating"])?></td>
   <td id="s"><a href="view.php"><?php echo($row["program"])?></a></td>
   <td id="s"><a href="view.php"><?php echo($row["school"])?></a></td>
   </tr>
   <?}?>
   </table>

   </body>
   <?php
     include('footer.php')
   ?>

   </html>
