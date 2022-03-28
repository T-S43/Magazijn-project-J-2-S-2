<?php
class Countries extends Controller {
    public function __construct() {
        $this->countryModel = $this->model('Country');
    }

    public function index() {
        $countryData = $this->countryModel->getCountries();
        $rows = "";
        foreach($countryData as $value) {
            $rows .= $value->id . " " . $value->name . " " . $value->capitalCity . " " . $value->continent . " " . $value->population ;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'Home page',
            'countryData' => $rows
        ];

        $this->view('countries/index', $data);
    }
}
