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
        $records.= "<td><a href=" . URLROOT . "/student/aanvragen_formulier?id=$value->id>[X]</a></td></tr>";
        // $records .= "<td><a href='update.php'?id=$value->id'><i class ='bi bi-pencil-square'></li></></td>";
    }

    $stylesheet = URLROOT . "/student/style.css";

    // Data that we send to the website
        $data = [
            'title' => 'Aanvragen',
            'ItemsRows' => $records,
            'Style' => $stylesheet
        ];

        // Send data to the website
        $this->view('student/aanvragen', $data);
    }
    
    public function aanvragen_formulier($id = null) {
        // var_dump($id);exit();
        // delete this after getting userrole and login system backup

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //executing the method in models
            $this->studentModel->createAanvragen($_POST);
            //returning to the index page
            header('location:' . '/student/aanvragen_formulier');
        }else{
            $row = $this->studentModel->getSingleUser($id);
            $row = 
            $data=[
                'title' => 'Aanvraag formulier',
                'row' => $row
                ];
            $this->view("student/aanvragen_formulier" , $data);
        }

        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     $_POST = filter_input_array(INPUT_POST);
        //     $postData = [
        //         'id' => $_POST['id'],
        //         'amount' => $_POST['amount'],
        //         'message' => $_POST['message'],
        //         'location'=> $_POST['location'],
        //         'accepted'=> $_POST['0'],
        //     ];
        // }

        // $data = [
        //     'title' => 'Aanvraag formulier',
        //     $postData => 'postData'
        // ];

        // $this->view('student/aanvragen_formulier', $data);
    }
        

    public function bestellingen() {
        // get student orders from the database
        $items = $this->studentModel->getBestellingen();

        $records = "";
        // Get each order
        foreach($items as $order) {
            // Check if it is accepted if it is above 1 or below 0 give an error message
            if ($order->accepted == '0') {
                $acceptedCheck = 'Niet geaccepteerd';
            } else if ($order->accepted == '1') {
                $acceptedCheck = 'Geaccepteerd';
            } else {
                $acceptedCheck = 'ERROR NOTIFY YOUR ADMIN ERRORCODE:2578';
            }
            $records .= "<tr><td>";
            $records .= $order->Name . "</td><td>" . $order->message . "</td><td>" . $order->amount . "</td><td>";
            $records .= $acceptedCheck . "</td></tr>"; 
            }

        
        // Data Send to the website
        $data = [
            'title' => 'Bestellingen',
            'itemRows' => $records
        ];
        $this->view('student/bestellingen', $data);
    }
}
