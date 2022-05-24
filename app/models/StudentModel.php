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

        public function createAanvragen ($data){
            // Insert into the database
            $this->db->query("INSERT INTO request (`amount`, `message`, `location`, `accepted`) VALUES (:amount, :message, :location, :accepted");
            $this->db->bind(':id', $data["id"], PDO::PARAM_INT);
            //This is to bind all values
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':message', $data['message']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':accepted', $data['accepted']);
            //execute function
            if ($this->db->execute()){
                return true;
            }else{
                return false;
    }

}

        public function getBestellingen (){
            // This is the session user id
            // Temp since the user login and userrole system doesn't works 
            // delete later
                $userId = 4;
            // Delete later
            
            // Get orders from the database
            $this->db->query("SELECT * FROM `request` LEFT JOIN `warehouse` ON (request.warehouseId = warehouse.id) WHERE $userId = `userId`");
            $result = $this->db->resultSet();
            return $result;
}



        public function getSingleUser($id){
                    $this->db->query("SELECT * FROM users WHERE id = '4'");
                    $this->db->bind(':id', $id, PDO::PARAM_INT);
                        // only returns 1 row with the right id
                    return $this->db->single();

            // This is not fuctional we need to get the userRole and login back online for this
            // Delete next line after fixing this issue
            $id = 4;
        }
        
    }
