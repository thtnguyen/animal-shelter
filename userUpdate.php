<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $date = date('Y-m-d');
      $user_id = $_POST["user_id"];
      $user_email = $_POST["user_email"];
      $user_pw = $_POST["user_pw"];
      $user_fn = $_POST["user_fn"];
      $user_ln = $_POST["user_ln"];
      $user_phone = $_POST["user_phone"];
      $acc_type = $_POST["account_type"];

      $sql = "INSERT INTO profile (Profile_ID, Type, Email, First_Name, Last_Name, Mobile_Number, Join_Date, Password) VALUES
               ('$user_id', '$acc_type', '$user_email', '$user_fn', '$user_ln', '$user_phone', '$date', '$user_pw')";
      $type_sql = "";

      if($acc_type === "user")
        $type_sql = "INSERT INTO user (User_ID) VALUES ('$user_id')";
      else
        $type_sql = "INSERT INTO administrator (Admin_ID) VALUES ('$user_id')";

      if($connection->query($sql) === TRUE && $connection->query($type_sql)){
        echo "Sucessfully registered new user.";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

	Your ID is: <?php echo $_POST["user_id"]; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>