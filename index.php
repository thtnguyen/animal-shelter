<!DOCTYPE html>
<html>
  <head>
    <meta content-type="text/html" charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="index.css" media="screen" /> 
    <title> Animal Shelter </title>
  </head>
  <body>
    <h1 class="header"> Hello Animal Shelter </h1>
    <?php
      $server= "localhost";
      $username = "root";

      if($connection->connect_error){
        die("Connection failed: " ); 
    //  if($connection->query("INSERT INTO user (User_ID) VALUES ('10000000')")=== TRUE)
    //     echo "New User record inserted.";
    //  else
    //     echo "Error inserting record.";
    $connection->close();
    ?>
  </body>
</html>
