<?php
class Lending {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getLend() {
        //collect data from database and table
        $this->db->query("SELECT * FROM lend");
        $result = $this->db->resultSet();
        return $result;
    } 

    /*public function lendRequests ($data) {
        $this->db->query("INSERT INTO lend( ");
    }*/
}
?>