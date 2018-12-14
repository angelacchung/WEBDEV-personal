<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
  <h1>Register</h1>
      <!-- <form class="form" method='POST' > -->
      <div id="ajax">
  <div id="form" method="POST" >
        <div >E-mail: <input id = "email" type='email' name="email" placeholder="example@example.com" /></div>

        <div >Password: <input id = "password" type='password' name="password" placeholder="Your password"/></div>

      <input id = "submit" type='submit' text="log in">
    </div>
  </div>
  <!-- </form>  -->

  <script src="js/ajax.js" type="text/javascript"></script>
  <a href="login-page.php" id="thankyou"><a>
</body>
<?php
  include('footer.php')
?>
