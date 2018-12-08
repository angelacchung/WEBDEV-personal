<?php
include('header.php')
?>

    <br>
    <br>
    <br>
    <br>
    <br>


		<h1>Registration</h1>
		<br>

		<form class="form" method='POST' action='process-register.php'>
        First Name: <input type='text' name="firstname" />
        <br>
        Last Name: <input type='text' name="lastname" />
        <br>
        Email: <input type='text' name="email" />
        <br>
        Username: <input type='text' name="username" />
        <br>
			  Password: <input type='text' name="password" />
        <br>
			<input type='submit'>
		</form>

    <?php
    include('footer.php')
  ?>
