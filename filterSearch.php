<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h3>Search animals</h3>
    <?php
      include("connect.php");
      $connection = connectToDB();
      
      $type = $_POST["animal_type"];
      $color = strtolower($_POST["color"]);
      //echo $type . " " . $color;

      $sql = "SELECT * FROM animal WHERE Color='$color' AND Type='$type'";
      if($query = $connection->query($sql)){
        if($query->num_rows == 0) echo "No animals were found.";
        while($row = $query->fetch_assoc()){
          $id = $row["Animal_ID"];
          $name = $row["Name"];

          //echo "--" . $row["Animal_ID"] . "<br>";
          echo "-- $id. $name ";
          echo " || <a href='animalProfile.php?id=$id'>View more about this animal</a><br>";
        }
        
      }else{
        echo "Error on animal query";
      }
    ?>
  <br>
  <a href="index.php">Back to home page</a>
  </body>

</html>