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
      <form class="form" method='POST' action='register-process.php'>
        <div id = "email">E-mail: <input type='email' name="email" placeholder="example@example.com" /></div>

        <div id = "password">Password: <input type='password' name="password" placeholder="Your password"/></div>

      <input id = "submit" type='submit' text="log in">
  </form>
</body>
</html>
