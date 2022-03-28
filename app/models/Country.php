<?php
class Country {
	private $db;

    public function __construct() {
        $this->db = new Database;
	}

    public function getCountries() {
        $this->db->query("SELECT * FROM country");
        $result = $this->db->resultSet();
        // var_dump($result);exit();
        return $result;
    }
}
