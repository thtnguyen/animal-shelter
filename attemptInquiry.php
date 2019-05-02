<!DOCTYPE html>

 <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body>
    <?php
        if(isset($_GET["id"]))
          $animal_id = $_GET["id"];
    ?>
    <h3>Inquire</h3>
    <form action="attemptInquiry2.php" method="post">
      <input type="hidden" name="animal_id" value=<?php echo $animal_id ?>>
      User ID: <input type="number" step="1" name="user_id" ><br>
      Password: <input type="password" name="user_pw"><br>

      Question about Animal: <input type="text" name="question" ><br>

      <input type="submit">
    </form>
    
	<a href='/index.php'>Back to home page </a> <br>

	</body>
</html>
