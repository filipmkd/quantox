<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $post['password'];
      $service = $_POST['selection'];
      
      $sql = "INSERT INTO test(name, email, password, selection) VALUES('$name','$email', '$password', '$selection')";
      $conn->exec($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        
    </body>
</html>