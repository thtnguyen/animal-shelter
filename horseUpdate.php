<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $horse_id = $_POST["horse_id"];
      $horse_mane = $_POST["horse_mane"];


      $sql = "INSERT INTO horse (Horse_ID, Mane_Color) VALUES ('$horse_id', '$horse_mane')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new animal (horse).";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

	The new horse ID is: <?php echo $horse_id; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>