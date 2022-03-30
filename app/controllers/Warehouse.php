<?php
class Warehouse extends Controller {
    public function __construct() {
        //using the model of warehouse
        $this->warehouseModel = $this->model('Warehouses');
    }

    public function index() {
        $warehouseData = $this->warehouseModel->getWarehouse();
        $rows = "";
        foreach($warehouseData as $value) {
            //put info in the rows to write it
            $rows .= "<tr>";
            $rows .= "<td>" . $value->id . "</td><td> " . $value->Name . "</td><td> " . $value->Amount . "</td><td> " . $value->available . "</td><td> " . $value->Location . "</td> ";
            $rows .= "</tr>";
        }
        //put the data in an array
        $data = [
            'warehouseData' => $rows
        ];
        //put the controller in the view
        $this->view('warehouse/index', $data);
    }
    public function Items(){
        //put the data in an array
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
        //looking if the error is empty to write the info to the database
        if (empty($data['nameError'])) {
            if ($this->warehouseModel->Items($data)) {
                //Redirect to the table page
                header('location: ' . URLROOT . '/warehouse/index');
            } else {
                die('Something went wrong.');
            }
        }
        //put the controller in the view
        $this->view('warehouse/Items', $data);
    }
}