<?php

    namespace web;

    class User
    {
        protected $name;
        protected $email;
        protected $password;

        public function __constructor($name, $email, $password)
        {
            $this->setName($name);
            $this->setEmail($email);
            $this->setPassword($password);
        }

        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getEmail() {
            return $this->email;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function getPassword() {
            return $this->name;
        }
        public function setPassword($name) {
            $this->name = $name;
        }        
    }
?>
