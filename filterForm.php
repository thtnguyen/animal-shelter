<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h3>Search animals</h3>
  <form action="filterSearch.php" method="post">
    Type: <br>
    <select name="animal_type" size="5">
    <option value="cat">Cat</option>
    <option value="dog">Dog</option>
    <option value="bird">Bird</option>
    <option value="rodent">Rodent</option>
    <option value="horse">Horse</option>
    </select>
    <br>

    Color: <input type="text" name="color"><br>
    <input type=submit><br>
  </form>
  <br>
  <a href='/index.php'>Back to home page </a> 
</body>
</html>
