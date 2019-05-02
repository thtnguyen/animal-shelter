<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h3>Adopt an Animal </h3>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $date = date('Y-m-d');
      $donation = $_POST["donation"];
      $animal_id = $_POST["animal_id"];
      $user_id = $_POST["user_id"];
      if($animal = $connection->query("SELECT * FROM animal WHERE Animal_ID='$animal_id'")->fetch_assoc()){
        $animal_name = $animal["Name"];
      }

      $sql = "INSERT INTO donates (Donation_Date, Donation_Amount, Animal_ID, Profile_ID) VALUES ('$date', '$donation', '$animal_id', '$user_id')";
      if($connection->query($sql)){
        echo "You have sucessfully donated $$donation to $animal_name.";
      }else{
        echo "Error: " . $sql1 . "<br>" . $connection->error;
        echo "Error: " . $sql2;
      }
    ?>
	<br/>

  <a href='/index.php'>Back to home page </a>
  </body>
</html>