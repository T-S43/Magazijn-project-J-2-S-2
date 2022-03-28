<?php
class Warehouses {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getWarehouse() {
        $this->db->query("SELECT * FROM warehouse");
        $result = $this->db->resultSet();
        // var_dump($result);exit();
        return $result;
    }
}