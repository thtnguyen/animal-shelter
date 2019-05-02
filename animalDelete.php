<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
  include("connect.php");
  $connection = connectToDB();
  if(isset($_GET["id"]))
    $toDeleteID = $_GET["id"];

  if($animalToDelete = $connection->query("SELECT * FROM animal WHERE Animal_ID=$toDeleteID")->fetch_assoc()){
    $toDeleteType = $animalToDelete["Type"];
    //$toDeleteName = $animalToDelete["Name"];
  }

  $type_sql = "DELETE FROM $toDeleteType WHERE ";
  switch($toDeleteType){
    case "dog": $type_sql = $type_sql . "Dog_ID"; break;
    case "cat": $type_sql = $type_sql . "Cat_ID"; break; 
    case "bird": $type_sql = $type_sql . "Bird_ID"; break;
    case "rodent": $type_sql = $type_sql . "Rodent_ID"; break;
    case "horse": $type_sql = $type_sql . "Horse_ID"; break;
  }
  $type_sql = $type_sql . "=$toDeleteID";
  $adoption_sql = "DELETE FROM adopt WHERE Animal_ID=$toDeleteID";
  $donation_sql = "DELETE FROM donates WHERE Animal_ID=$toDeleteID";
  $inquiry_sql = "DELETE FROM inquiry WHERE Animal_ID=$toDeleteID";
  $likes_sql = "DELETE FROM likes WHERE Animal_ID=$toDeleteID";
  $animal_sql = "DELETE FROM animal WHERE Animal_ID=$toDeleteID";
  $queries = [$adoption_sql, $donation_sql, $inquiry_sql, $likes_sql, $type_sql, $animal_sql];

  //if($connection->query())
  foreach($queries as $query){
    if(!$connection->query($query)){
      echo "Error: " . $query;
    }
  }

  echo "Animal with ID " . $toDeleteID . " was succesfully deleted.";
?>
<br>
<a href=/index.php >Back to home page</a>
</html>