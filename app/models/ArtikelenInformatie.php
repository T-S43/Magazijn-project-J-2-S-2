<?php
class ArtikelenInformatie {
    private $db;

    public function __construct() {
        //make a new database class that is made in database.php
        $this->db = new Database;
    }

    public function getArtikelen() {
        // We are grabbing users and request for data we need on the page also accepted in the request field is important to see if it has been accepted.
        $this->db->query("SELECT * FROM accepted_orders INNER JOIN request ON (accepted_orders.requestId = request.id)
                                                        INNER JOIN users ON (request.userId = users.id)
                                                        WHERE accepted = '1'");
        $result = $this->db->resultSet();
        return $result;
    }
}