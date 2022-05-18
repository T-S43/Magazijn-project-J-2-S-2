<?php
    class StudentModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getItems(){
            $this->db->query("SELECT * FROM warehouse WHERE available = 1");
            $result = $this->db->resultSet();
            return $result;
        }
        
    }
