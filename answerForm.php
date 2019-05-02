<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php
    if(isset($_GET["p"]) && isset($_GET["a"]) && isset($_GET["d"])){
      $date = $_GET["d"];
      $asker_id = $_GET["p"];
      $animal_id = $_GET["a"];
    }
  ?>
  <h3>Answer inquiry</h3>
  <form action=<?php echo "adminAnswer.php?p=$asker_id&a=$animal_id&d=$date"; ?> method="post">
    If you are an Admin, enter your admin ID number and password below to answer the inquiry.<br>
    Admin ID: <input type="text" name="email"><br>
    Password: <input type="password" name="user_pw"><br>
    Answer:<input type="text" name="answer"><br>
    <input type="submit">
  </form>
  <br>
  <a href="index.php">Back to home page</a>
</body>
</html>