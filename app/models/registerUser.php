<?php
class registerUser{
    private $db;

    public function __construct()
    {
        //make a new database class that is made in database.php
        $this->db = new Database;
    }

    public function getRegisterUser()
    {
        //select the database
        $this->db->query("SELECT * FROM users LEFT JOIN roll ON (users.UserRoll = roll.rollName)");
        $result = $this->db->resultSet();
        // var_dump($result);exit();
        return $result;
    }
    public function createRegisterUser($data)
    {
        //insert for the data
        $this->db->query("INSERT INTO users(`id`, `email`, `pass`, `firstname`, `infix`, `lastname`, `UserRoll`) VALUES(NULL, :email, :pass, :firstname, :infix, :lastname, :UserRoll)");

        //bind values
        $this->bindUsers($data);

        //execute the function
        if ($this->db->execute())
        {
            return true;
        }else {
            return false;
        }
    }
    //methode to update the user
    public function updateUser($post)
    {
        $this->db->query("UPDATE users 
                                        SET email = :email,
                                            pass = :pass, 
                                            firstname = :firstname,
                                            infix = :infix,
                                            lastname = :lastname,
                                            UserRoll = :UserRoll
                                        WHERE id= :id ");
        $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
        $this->bindUsers($post);

        return $this->db->execute();
    }
    // method to delete a user
    public function deleteUser($id)
    {
        $this->db->query("DELETE FROM users WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    //bind the data that we need and made a method of it
    public function bindUsers($data)
    {
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':infix', $data['infix']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':UserRoll', $data['UserRoll']);
    }


    // get the user id from a single user to use that id in the update script
    public function getSingleUser($id)
    {
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        //only returns 1 row with the right id
        return $this->db->single();
    }
}