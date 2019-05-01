<?php 

  function connectToDB(){
    $server= "localhost";
    $username = "root";
    $password = "Baekxingsoo12"; //enter your mysql password here
    $database = "SHELTER";

    $connection = new mysqli($server, $username, $password, $database);
    if($connection->connect_error){
      die("Connection failed: " ); 
    }

  return $connection;
}
?>