<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include("connect.php");
    $connection = connectToDB();
    if(isset($_GET["id"]))
      $animal_id = $_GET["id"];
    
    $sql = "SELECT * FROM animal WHERE Animal_ID='$animal_id'";
    if($animal = $connection->query($sql)->fetch_assoc()){
      $name = $animal["Name"];
      $age = $animal["Age"];
      $type = $animal["Type"];
      $desc = $animal["Description"];
      $color = $animal["Color"];
      $breed = $animal["Breed"];
      $size = $animal["Size"];
      $avail_str = $animal["Availability"];

      if($avail_str === "1") $avail = "yes";
      else $avail = "no";

      
      echo "<h3> Profile $animal_id. $name </h3>"; 
      echo "
      Name: $name <br>
      Age: $age <br>
      Type: $type <br>
      Color: $color <br>
      Breed: $breed <br>
      Size: $size <br>
      Description: $desc <br>
      ";

      //maybe add additional type info

      // switch($type){

      //   case "dog":{
      //     echo "dogg";
      //     if($dog = $connection->query("SELECT * FROM dog WHERE Dog_ID='$animal_id'")){
      //       $coat_len = $dog["Coat_Length"];
      //       $trained_str = $dog["Is_House_Trained"];
      //       echo $coat_len . " " . $trained_str;
      //       if($trained_str === "1") $trained = "yes";
      //       else $trained = "no";
      //       echo "dog";
      //       echo "
      //       <br>
      //       Coat Length: $coat_len <br>
      //       Is house trained? $trained <br>
      //       ";
      //     }else{
      //       echo "Error on subtype query";
      //     }
      //     break;
      //   }
      //   case "cat":{
      //     if($cat = $connection->query("SELECT * FROM cat WHERE Cat_ID='$animal_id'")){
      //       $temper = $cat["Temperment"];
      //       $trained_str = $cat["Is_House_Trained"];
            
      //       if($trained_str === "1") $trained = "yes";
      //       else $trained = "no";

      //       echo "
      //       Temperament: $temper <br>
      //       Is house trained? $trained <br>
      //       ";

      //     }else{
      //       echo "Error on subtype query";
      //     }

      //     break;
      //   }
      //   case "bird":{
      //     if($bird = $connection->query("SELECT * FROM bird WHERE Bird_ID='$animal_id'")){
      //       $feather = $bird["Feather_Color"];
      //       $trained_str = $bird["Is_House_Trained"];
            
      //       if($trained_str === "1") $trained = "yes";
      //       else $trained = "no";

      //       echo "
      //         Feather Color: $feather <br>
      //         Is house trained? $trained <br>
      //       ";

      //     }else{
      //       echo "Error on subtype query";
      //     }
      //     break;
      //   }
      //   case "rodent":{
      //     if($rodent = $connection->query("SELECT * FROM rodent WHERE Rodent_ID='$animal_id'")){
      //       $trained_str = $rodent["Is_House_Trained"];
            
      //       if($trained_str === "1") $trained = "yes";
      //       else $trained = "no";

      //       echo "
      //         Is house trained? $trained <br>
      //       ";
      //     }else{
      //       echo "Error on subtype query";
      //     }

      //     break;
      //   }
      //   case "horse":{
      //     if($horse = $connection->query("SELECT * FROM horse WHERE Horse_ID='$animal_id'")){
      //       $mane = $horse["Mane_Color"];
      //       echo "Mane Color: $mane <br>";
      //     }else{
      //       echo "Error on subtype query";
      //     }

      //     break;
      //   }
      // }
      echo "Available for adoption? $avail <br>";
    }
  ?>

  <br>
  <a href="index.php">Back to home page</a>
  </body>


</html>