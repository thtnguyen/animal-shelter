<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h3> Viewing Inquiries </h3>
<?php
  include("connect.php");
  $connection = connectToDB();
  if(isset($_GET["id"]))
    $id = $_GET["id"];
  
  $sql = "SELECT * FROM inquiry WHERE Animal_ID='$id'";
  if($query = $connection->query($sql)){
    $unanswered = 0;
    if($query->num_rows == 0) echo "There are no inquiries for this animal.";
    while($row = $query->fetch_assoc()){
      
      if($row["Answer"] === "") $unanswered=1;
      
      $date = $row["Inquiry_Date"];
      $question = $row["Question"];
      $asker_id = $row["Profile_ID"];
      if($unanswered === 0){
        $answer = $row["Answer"];
      }
      
      if($asker = $connection->query("SELECT * FROM profile WHERE Profile_ID='$asker_id'")->fetch_assoc())
          $asker_name = $asker["First_Name"] . " " . $asker["Last_Name"];
      else
          echo "Error on asker query";
      
      
      echo "Asked by " . $asker_name . " on " . $date . ": " . $question;
      if($unanswered === 1) echo "  || <a href='answerForm.php?p=$asker_id&a=$id&d=$date'>Answer this inquiry</a>";
      else echo "<br> Answer: " . $answer;
      echo "<br><br>";
    }
    if($unanswered === 0) echo "No unanswered inquires were found for this animal.";
  }else{
    echo "Error: " . $sql;
  }
?>
<br>
<a href="index.php">Back to home page</a>
</body>
</html>