<?php

    class DB
    {
        public function saveToDatabase($name, $email, $password)
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
    
            $sql = "INSERT INTO test(name, email, password) VALUES('$name','$email', '$password')";
            $conn->exec($sql);
        }

    }
    
?>
