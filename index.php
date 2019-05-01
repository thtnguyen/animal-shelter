<!DOCTYPE html>
<html>
  <head>
    <meta content-type="text/html" charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="index.css" media="screen" /> 
    <title> Animal Shelter </title>
  </head>
  <body>
    <h1 class="header"> Animal Shelter </h1>

    <a href="registerForm.php">Register User</a>
		<br/>

    <a href="animalForm.php">New Animal</a>
		<br/>
		
    
    <?php
    //  if($connection->query("INSERT INTO user (User_ID) VALUES ('10000000')")=== TRUE)
    //     echo "New User record inserted.";
    //  else
    //     echo "Error inserting record.";
    //  $result = $connection->query("SELECT User_ID from user");
    //  if($result->num_rows > 0){
    //     while($row = $result->fetch_assoc())
    //       echo $row[User_ID] . "<br>";
    //   }
    //  else echo "Query error";
    //   $connection->close();
    ?>
  </body>
</html>
