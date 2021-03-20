<?php

    namespace web;

    class Validate
    {
        public function validate($name, $email, $password)
        {
            if($_POST['name'] == '')
            {
                echo "Name field cannot be empty";
                return -1;
            }
            if($_POST['email'] == '')
            {
                echo "Email field cannot be empty";
                return -1;
            }
            if($_POST['password'] == '')
            {
                echo "Password field cannot be empty";
                return -1;
            }
            if($_POST['repeatpassword'] == '')
            {
                echo "Repeated password field cannot be empty";
                return -1;  
            }
        }
    }
    
?>
