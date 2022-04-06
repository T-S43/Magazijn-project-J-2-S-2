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
    foreach($artikelData as $value) {
        $records .= "<tr>";
        $records .= "<td>" . $value->firstname . "</td><td> " . $value->tijdelijkAcceptieNaam . "</td><td> " . $value->dateAcceptance . "</td><td> " . $value->dateRetour . "</td> ";
        $records .= "</tr>";
    }
// foreach ($record = mysqli_fetch_assoc($artikelData)) {
//         $records .= "<tr><td>" .
//             $record["name"] . "</td><td>" .
//             $record["tijdelijkAcceptieNaam"] . "</td><td>" .
//             $record["dateAcceptance"] . "</td><td>".
//             $record["dateRetour"] . "</td></tr>";
//         }
        $data = [
            'artikelenRows' => $records
        ];
    $this->view('artikelen_informatie/index', $data);
    }
    //         foreach ($countries as $value) {
    //             $rows .= $value->id 
}