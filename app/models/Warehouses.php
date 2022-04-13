<?php
class Warehouses {
    private $db;

    public function __construct() {
        //make a new database class that is made in database.php
        $this->db = new Database;
    }

    public function getWarehouse() {
        //select the database
        $this->db->query("SELECT * FROM warehouse");
        $result = $this->db->resultSet();
        // var_dump($result);exit();
        return $result;
    }
    public function Items ($data){
                // make a statement to update the info that is fulled in the views and writing to the controller
                $this->db->query("INSERT INTO warehouse(id, Name, Amount, available, Location) VALUES(NULL,:name,:amount,:available,:location)");

                //bind value
                $this->db->bind(':name', $data['name']);
                $this->db->bind(':amount', $data['amount']);
                $this->db->bind(':available', $data['available']);
                $this->db->bind(':location', $data['location']);

                //execute the function
                if ($this->db->execute()){
                    return true;
                }else{
                    return false;
        }

    }
}