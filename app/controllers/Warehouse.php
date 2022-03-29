<?php
class Warehouse extends Controller {
    public function __construct() {
        $this->warehouseModel = $this->model('Warehouses');
    }

    public function index() {
        $warehouseData = $this->warehouseModel->getWarehouse();
        $rows = "";
        foreach($warehouseData as $value) {
            $rows .= "<tr>";
            $rows .= "<td>" . $value->id . "</td><td> " . $value->Name . "</td><td> " . $value->Amount . "</td><td> " . $value->available . "</td><td> " . $value->Location . "</td> ";
            $rows .= "</tr>";
        }
        $data = [
            'warehouseData' => $rows
        ];

        $this->view('warehouse/index', $data);
    }
    public function Items(){
        $data = [
            'name' => '',
            'amount' => '',
            'available'=> '',
            'location'=> '',
            'nameError'=> ''
        ];

        //process the form
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'name' => $_POST['name'],
                'amount' => $_POST['amount'],
                'available'=> $_POST['available'],
                'location'=> $_POST['location'],
                'nameError'=> ''
            ];

        }
        //look if the data is filled in from name
        if (empty($data['name'])) {
            $data['nameError'] = 'A.U.B voer een item in';
        }

        if (empty($data['nameError'])) {
            if ($this->warehouseModel->Items($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/warehouse/index');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('warehouse/Items', $data);
    }
}