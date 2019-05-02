<!DOCTYPE html>

 <html>
	<body>
    <h3>Register</h3>
    <form action="userUpdate.php" method="post">

      ID: <input type="number" step="1" name="user_id" value= <?php 
      include("connect.php");
      $connection = connectToDB();
      //$sql = "SELECT User_ID from user";
      $users = $connection->query("SELECT Profile_ID from profile");
      echo $users->num_rows+1;
      ?> readonly><br>

      First Name: <input type="text" name="user_fn"><br>
      Last Name: <input type="text" name="user_ln"><br>
      Phone Number: <input type="text" name="user_phone"><br>
      E-mail: <input type="text" name="user_email"><br>
      Password: <input type="password" name="user_pw"><br>
      Account Type: 
      <input type="radio" id="admin"
       name="account_type" value="admin" checked>
      <label for="admin">Admin</label>

      <input type="radio" id="regular"
       name="account_type" value="user">
      <label for="regular">Regular User</label>

      <input type="submit">
    </form>
    
	<?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>

	</body>
</html>