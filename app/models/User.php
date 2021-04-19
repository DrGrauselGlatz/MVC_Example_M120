<?php

    class User {

        public $id;
        public $name;

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function getMail() {
            $result = $this->db->fetchSingle("SELECT mail FROM users WHERE id = $this->id");
            return $result['mail'];
        }
        
    }
    
?>