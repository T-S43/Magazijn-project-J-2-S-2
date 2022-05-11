<?php
    class Lend extends Controller {
        private $db;
        
        public function __construct() {
            //tell it to use the lend model
            $this->lendModel = $this->model('Lending');
        }
    
        public function index() {
            $lendData = $this->lendModel->getLend();
            $row = "";
            foreach($lendData as $lendInfo) {
                $row .= "<tr>";
                $row .= "<td>" . $lendInfo->lendID . "</td><td> " . $lendInfo->warehouseID . "</td><td> " . $lendInfo->userID . "</td><td> " . $lendInfo->timestamp . "</td><td> " . $lendInfo->lendPeriod . "</td> ";
                $row .= "</tr>";
            }
            $data = [
                'lendData' => $row
            ];
            $this->view('lend/index', $data);
        }
        public function passRequest(){   
            $data = [
                'lendID' => '',
                'warehouseID' => '',
                'userID' => '',
                'timestamp' => '',
                'lendPeriod' => '',
            ];
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST);
                $data = [
                    'lendID' => $_POST[''],
                    'warehouseID' => $_POST[''],
                    'userID' => $_POST[''],
                    'timestamp' => $_POST[''],
                    'lendPeriod' => $_POST[''],
                ];
            }
        }
    }
?>