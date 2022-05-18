<?php
class Student extends Controller {
    public function __construct() {
        $this->studentModel = $this->model('StudentModel');
    }

    public function index() {
        $data = [
            'title' => 'Dashboard'
        ];

        $this->view('student/index', $data);
    }

    public function aanvragen() {
        // Get the items form the student model
    $items = $this->studentModel->getItems();

        // We get are collecting records to echo later
    $records = "";
    foreach($items as $value) {
        $records.= "<tr>";
        $records.= "<td>" . $value->Name . "</td><td>" . $value->Amount . "</td>";
        $records.= "<td><a href=" . URLROOT . "/student/aanvragen_formulier/$value->id>[X]</a></td></tr>";

        // $records .= "</td><td><a href=" . URLROOT . "/baliemedewerker/baliemedewerker_delete/$value->id>[X]</a>";
    }

    // Data that we send to the website
        $data = [
            'title' => 'Aanvragen',
            'ItemsRows' => $records
        ];

        // Send data to the website
        $this->view('student/aanvragen', $data);
    }
    
    public function aanvragen_formulier() {
        $data = [
            'title' => 'Aanvraag formulier'
        ];

        $this->view('student/aanvragen_formulier', $data);
    }

    public function bestellingen() {
        $data = [
            'title' => 'Bestellingen'
        ];

        $this->view('student/bestellingen', $data);
    }
}
