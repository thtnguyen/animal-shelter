<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php
    include("connect.php");
    $connection = connectToDB();
    $date = $_POST["donation_date"];

    echo "<h3>Donations made on $date </h3>";
    if($donate_query = $connection->query("SELECT * FROM donates WHERE Donation_Date='$date'")){
      if($donate_query->num_rows == 0) echo "No donations were made on this date.";
      while($row = $donate_query->fetch_assoc()){
        $amount = $row["Donation_Amount"];
        $donator_id = $row["Profile_ID"];
        $donatee_id = $row["Animal_ID"];

        if($donator = $connection->query("SELECT * FROM profile WHERE Profile_ID=$donator_id")->fetch_assoc())
          $donator_name = $donator["First_Name"] . " " . $donator["Last_Name"];
        else
          echo "Error on donator query";

        if($donatee = $connection->query("SELECT * FROM animal WHERE Animal_ID=$donatee_id")->fetch_assoc())
          $donatee_name = $donatee["Name"];
        else
          echo "Error on donatee query";

        echo "--" . $donator_name . " donated $" . $amount . " to " . $donatee_name . "<br>";
      }
      
    }

  ?>
  <br>
  <a href="index.php"> Back to home page </a>
</body>
</html>