<?php
class ArtikelenInformatie {
    private $db;

    public function __construct() {
        //make a new database class that is made in database.php
        $this->db = new Database;
    }

    public function getArtikelen() {
        $this->db->query("SELECT * FROM accepted_orders INNER JOIN request ON (accepted_orders.requestId = request.id)
                                                        INNER JOIN users ON (request.userId = users.id)
                                                        WHERE accepted = '1'");
        $result = $this->db->resultSet();
        // var_dump($result);
        return $result;
    }
}