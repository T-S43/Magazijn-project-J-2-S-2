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

    public function approverequest($id) {
        $this->db->query("UPDATE `lend` SET `lendStatus` = 'Approved' WHERE `lendID` = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        header("Location:" . URLROOT . "/lend");
    }
    
    public function denyrequest($id) {
        $this->db->query("UPDATE `lend` SET `lendStatus` = 'Denied' WHERE `lendID` = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        header("Location:" . URLROOT . "/lend");
    }

    public function deleterequest($id) {
        $this->db->query("DELETE FROM `lend` WHERE `lendID` = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        header("Location:" . URLROOT . "/lend");
    }


    /*public function lendRequests ($data) {
        $this->db->query("INSERT INTO lend( ");
    }*/
}
?>