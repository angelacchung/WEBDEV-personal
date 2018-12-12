<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
  <h1>Log in</h1>
  <form class="form" method='POST' action='process-login.php'>

      <div id = "email">E-mail: <input type='email' name="email" placeholder="example@example.com" /></div>

      <div id = "password">Password: <input type='password' name="password" placeholder="Your password"/></div>

      <!-- <button><img id="login" type ='submit' src="buttons/login.png"></button> -->
    <input id = "submit" type='submit' text="log in">
  </form>
</body>
<?php
  include('footer.php')
?>

</html>
