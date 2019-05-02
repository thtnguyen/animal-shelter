<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("connect.php");
      $connection = connectToDB();
      if(isset($_GET['id']))
        $id = $_GET['id'];
      
      $donation_sql = "SELECT * FROM donates WHERE Profile_ID='$id'";
      if($user = $connection->query("SELECT * from profile WHERE Profile_ID=$id")->fetch_assoc())
        echo "<h3>Donations made by " . $user["First_Name"] . "</h3>";
      else
        echo "Error : profile query";

      if($donations = $connection->query($donation_sql)){
        if($donations->num_rows == 0) echo 'This user has made no donations.';
        while($donate_row = $donations->fetch_assoc()){
          
          $animal_id = $donate_row["Animal_ID"];
          if($animal = $connection->query("SELECT * FROM animal WHERE Animal_ID=$animal_id")->fetch_assoc())
            $animal_name = $animal["Name"];
          else
            echo "Error: animal query";

          $date = $donate_row["Donation_Date"];
          $amount = $donate_row["Donation_Amount"];
          
          echo "--Donated $" . $amount . " to " . $animal_name . " on " . $date;
        }

      }else{
        echo "Error: " . $donation_sql;
      }

      $adoption_sql = "SELECT * FROM adopt WHERE Profile_ID='$id'";
      echo "<h3>Adoptions by " . $user["First_Name"] . "</h3>";

      if($adoptions = $connection->query($adoption_sql)){
        if($adoptions->num_rows == 0) echo 'This user has made no adoptions.';
        while($adopt_row = $adoptions->fetch_assoc()){

          $animal_id = $adopt_row["Animal_ID"];
          if($animal = $connection->query("SELECT * FROM animal WHERE Animal_ID=$animal_id")->fetch_assoc())
            $animal_name = $animal["Name"];
          else
            echo "Error: animal query";

          $date = $adopt_row["Adoption_Date"];
          $fee = $adopt_row["Adoption_Fee"];

          echo "--Adopted " . $animal_name . " on " . $date . " for $" . $fee;
        }
      }else{
        echo "Error: " . $adoption_sql;
      }
    ?>
    <br><br><br>
   <a href='/index.php'>Back to home page </a>
  </body>

</html>