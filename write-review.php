<?php
 include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!DOCTYPE html>
<html>
<head>
<title>Write a review</title>
</head>
<body>
<h1>Write a review</h1>
<form id="form" method='POST' action='process-review.php'>
  <!-- <input type="hidden" value="<?php //echo($row["id"]==1); ?>" name="id"/> -->
  <div>
    <h3 class="review">School</h3>
    McMaster University:<input type="radio" name="school" value="McMaster University">
    York University:<input type="radio" name="school" value="York university">
    University of Toronto:<input type="radio" name="school" value="University of Toronto">
    <!-- Wilfred Laurier University:<input type="radio" name="school" value="Wilfred Laurier University"> -->
    Queens University:<input type="radio" name="school" value="Queens University">
    <!-- Ryerson University:<input type="radio" name="school" value="Ryerson University">
    University of Waterloo:<input type="radio" name="school" value="University of Waterloo"> -->
  </div>
  <p>Your title</p>
  <input type="text" name="title">
  <p>Your review</p>
  <textarea id="content" rows="4" cols="50" name="content" type="text">
  </textarea>
  <!-- <input id="content" type="text" name="content"> -->

  <p>What is your rating?</p>
  <div>
  <input class="rbtn" type="radio" value=1 name="rating">1
  <input class="rbtn" type="radio" value=2 name="rating">2
  <input class="rbtn" type="radio" value=3 name="rating">3
  <input class="rbtn" type="radio" value=4 name="rating">4
  <input class="rbtn" type="radio" value=5 name="rating">5
  </div>

  <div>
    <h3 class="review">Program</h3>
    Accounting:<input type="radio" name="program" value="Accounting">
    <!-- Biochemistry:<input type="radio" name="program" value="Biochemistry"> -->
    <!-- Biology:<input type="radio" name="program" value="Biology"> -->
    <!-- Chemistry:<input type="radio" name="program" value="Chemistry"> -->
    Computer Science:<input type="radio" name="program" value="Computer Science">
    <!-- Economics:<input type="radio" name="program" value="Economics"> -->
    English:<input type="radio" name="program" value="English">
  </div>
  <input id = "submit" type="submit">
</form>

</body>

<footer class="footer">
  <ul>
    <li href="#">Contact</li>
    <li href="#">Help</li>
    <li href="#">Terms and conditions</li>
  </ul>
</footer>
</html>
<?php
  // include('footer.php')
?>
