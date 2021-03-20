<?php
    
    namespace Website;

    class Validate
    {
        public function pushToDatabase($obj)
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
        }

        public function validate($obj)
        {
            if($name == '')
            {
                echo "Name field cannot be empty";
                die();
            }
        }
    }
    
?>