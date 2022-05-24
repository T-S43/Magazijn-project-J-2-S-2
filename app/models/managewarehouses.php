<?php

class managewarehouses
{
    private $db;

    public function __construct()
    {
        //make a new database class that is made in database.php
        $this->db = new Database;
    }
    public function bindItems($data)
    {
        //bind value
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':amount', $data['amount']);
        $this->db->bind(':available', $data['available']);
        $this->db->bind(':location', $data['location']);
    }

    public function getWarehouse()
    {
        // get the warehouse items and put it in an array
        $this->db->query("SELECT * FROM warehouse");
        $result = $this->db->resultSet();
        // get the results
        return $result;
    }
    public function items ($data)
    {
        // make a statement to update the info that is fulled in the views and writing to the controller
        $this->db->query("INSERT INTO warehouse(id, Name, Amount, available, Location) VALUES(NULL,:name,:amount,:available,:location)");

        //bind value
        $this->bindItems($data);

        //execute the function
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateitem($post)
    {
        //get warehouse and change data
        $this->db->query("UPDATE warehouse 
                                SET Name = :name, 
                                    Amount = :amount, 
                                    available = :available, 
                                    Location = :location
                                WHERE id = :id ");

        // bind the params from the database to the post value
        $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
        $this->bindItems($post);

        //return the execute
        return $this->db->execute();
    }

    public function deleteItem($id)
    {
        // get the database where to delete
        $this->db->query("DELETE FROM warehouse WHERE id = :id");
        // bind the id
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        // execute the delete
        $this->db->execute();
    }

    public function getSingleItem($id)
    {
        // get 1 item from the id
        $this->db->query("SELECT * FROM warehouse WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        //only returns 1 row with the right id
        return $this->db->single();
    }
}