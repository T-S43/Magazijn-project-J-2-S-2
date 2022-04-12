<?php
class Artikelen_informatie extends Controller {
    public function __construct() {
        //using the model of warehouse
        $this->artikelInformatieModel = $this->model('ArtikelenInformatie');
    }

    public function index() {
        $artikelData = $this->artikelInformatieModel->getArtikelen();
        
        $record = "";

        // records goes through all records that come through the database and prints them out if the requirement is correct.
    $records = "";
    ///////////Acceptie naam can be changed in the future if you want to use teacher from the database////////////////////////////////////
    foreach($artikelData as $value) {
        $records .= "<tr>";
        $records .= "<td>" . $value->firstname . " " . $value->lastname . "</td><td>" . $value->tijdelijkAcceptieNaam . "</td><td> " . $value->dateAcceptance . "</td><td> " . $value->dateRetour . "</td> ";
        $records .= "</tr>";
    }

    $data = ['artikelenRows' => $records];

    $this->view('artikelen_informatie/index', $data);
    } 
}