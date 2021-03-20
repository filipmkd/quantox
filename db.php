<?php

    class DB extends \web\User
    {
        public function saveToDatabase($obj)
        {
            try 
            {
                $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } 
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }

            $name = $obj->name;
            $email = $obj->email;
            $password = md5($obj->password);
            $selection = $obj->selection;
    
            $sql = "INSERT INTO test(name, email, password, selection) VALUES('$name','$email', '$password', '$selection')";
            $conn->exec($sql);
        }

    }
    
?>
