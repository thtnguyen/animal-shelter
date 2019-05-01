<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $user_id = $_POST["user_id"];
      $user_email = $_POST["user_email"];
      $user_pw = $_POST["user_pw"];

      $sql = "INSERT INTO user (User_ID) VALUES ('$user_id')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new user.";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }

      //$connection->close();
    ?>

	Your ID is: <?php echo $_POST["user_id"]; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>