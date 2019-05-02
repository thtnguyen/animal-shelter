<!DOCTYPE html>

 <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body>
    <h3>Register</h3>
    <form action="userUpdate.php" method="post">

      ID: <input type="number" step="1" name="user_id" value= <?php 
      include("connect.php");
      $connection = connectToDB();
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
    
	<a href='/index.php'>Back to home page </a> <br>

	</body>
</html>