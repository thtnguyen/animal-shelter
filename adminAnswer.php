<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h3>Answer Inquiry </h3>
  <?php
    include("connect.php");
    $connection = connectToDB();
    if(isset($_GET["p"]) && isset($_GET["a"]) && isset($_GET["d"])){
      $date = $_GET["d"];
      $asker_id = $_GET["p"];
      $animal_id = $_GET["a"];
    }
    $answer = $_POST["answer"];
    $admin_email = $_POST["email"]; //id
  
    // if($admin = $connection->query("SELECT * FROM profile WHERE Email=$admin_email")->fetch_assoc())
    //    $admin_id = $admin["Profile_ID"];
    // else
    //   echo "<br> Error on admin query";
    
    if($connection->query("UPDATE inquiry SET Answer='$answer' WHERE Profile_ID='$asker_id' AND Animal_ID='$animal_id' AND Inquiry_Date='$date'")){
      if($connection->query("UPDATE inquiry SET Admin_ID='$admin_email' WHERE Profile_ID='$asker_id' AND Animal_ID='$animal_id' AND Inquiry_Date='$date'"))
        echo "Succesfully answered the inquiry.";
    }else{
      echo "<br> Error on inquiry update";
    }
  
  ?>
  <br>
  <a href="index.php">Back to home page</a>
</body>
</html>