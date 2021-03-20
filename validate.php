<?php

    namespace web;

    class Validate
    {
        public function validate($obj)
        {
            if($this->name == '')
            {
                echo "Name field cannot be empty";
                die();
            }
            if($this->email == '')
            {
                echo "Email field cannot be empty";
                die();
            }
            if($this->password == '')
            {
                echo "Password field cannot be empty";
                die();
            }
        }
    }
    
?>
