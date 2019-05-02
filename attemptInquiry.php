<!DOCTYPE html>

 <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body>
    <h3>Inquire</h3>
    <form action="attempInquiry2.php" method="post">

      User ID: <input type="number" step="1" name="user_id" ><br>
      Password: <input type="password" name="user_pw"><br>
      <!-- How to get date -->
      Date: <input type="text" name="date" ><br>

      <!-- You must LogIn before you can inquire about an animal -->
      <h6></h6> <h5>Animal you want to Inquire about: </h5>
      Animal ID: <input type="number" step="1" name="animal_id" ><br>
      Question about Animal: <input type="text" name="question" ><br>

      <!-- No idea how to submit -->
      <input type="submit">
    </form>
    
	<a href='/index.php'>Back to home page </a> <br>

	</body>
</html>
