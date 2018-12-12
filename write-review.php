<?php
 include('header.php')
?>

   <link rel="stylesheet" type="text/css" href="css/main.css" />
<!DOCTYPE html>
<html>
<head>
<title>Write a review</title>
</head>
<body>
<h1>Write a review</h1>
<form class="form" method='POST' action='process-review.php'>
  <!-- <input type="hidden" value="<?php //echo($row["id"]==1); ?>" name="id"/> -->
  <p>title</p>
  <input type="text" name="review">
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
  <input id = "submit" type="submit">
</form>

</body>

</html>
<?php
  // include('footer.php')
?>
