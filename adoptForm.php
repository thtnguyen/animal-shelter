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
      $type = $animal["Type"];
      $animal_name = $animal["Name"];
    }else{
      echo "Error on animal query";
    }
  ?>
  <h3>Adopt an Animal</h3>
    <form action="adopt.php" method="post">
    <input type="hidden" name="animal_id" value= <?php echo $animal_id ?>>
    You are adopting a pet <?php echo $type ?> named <?php echo $animal_name ?><br>
    The adoption fee will be $25.00. <br>
    Please enter your User ID Number and passwrod below to confirm your adoption: <br>
    ID Number: <input type="text" name="user_id"><br>
    Password: <input type="password" name="user_pw"><br>

    <input type="submit">
  </form>

</body>
</html>