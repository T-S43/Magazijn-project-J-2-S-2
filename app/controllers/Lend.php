<?php
    class Lend extends Controller {
        private $db;
        
        public function __construct() {
            //tell it to use the lend model
            $this->lendModel = $this->model('Lending');
        }
    
        public function index() {
            $lendData = $this->lendModel->getLend(); // Fetch 
            $row = "";
            foreach($lendData as $lendInfo) {
                $row .= "<tr>";
                $row .= "<td>" . $lendInfo->lendID . "</td><td> " . $lendInfo->requestID . "</td><td> " . $lendInfo->warehouseID . "</td><td> " . $lendInfo->userID . "</td><td> " . $lendInfo->timestamp . "</td><td> " . $lendInfo->lendPeriod . "</td><td>" . $lendInfo->lendStatus . "</td>";
                $row .= "<td> <a href='/lend/approve?id=$lendInfo->lendID'>approve</a></td>";
                $row .= "<td> <a href='/lend/deny?id=$lendInfo->lendID'>deny</a></td>";
                $row .= "<td> <a href='/lend/delete?id=$lendInfo->lendID'>delete</a></td>";
                $row .= "</tr>";
            }
            $data = [
                'lendData' => $row
            ];
            $this->view('lend/index', $data);
        }

        public function approve() {
            $id = $_GET['id'];
            if ($id) {
                $this->lendModel->approverequest($id);
            }
        }

        public function deny() {
            $id = $_GET['id'];
            if ($id) {
                $this->lendModel->denyrequest($id);
            }
        }

        public function delete() {
            $id = $_GET['id'];
            if ($id) {
                $this->lendModel->deleterequest($id);
            }
        }

        public function passRequest(){   
            $data = [
                'lendID' => '',
                'requestID' => '',
                'warehouseID' => '',
                'userID' => '',
                'timestamp' => '',
                'lendPeriod' => '',
                'lendStatus' => '',
            ];
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST);
                $data = [
                    'lendID' => $_POST[''],
                    'requestID' => $_POST[''],
                    'warehouseID' => $_POST[''],
                    'userID' => $_POST[''],
                    'timestamp' => $_POST[''],
                    'lendPeriod' => $_POST[''],
                    'lendStatus' => $_POST[''],
                ];
            }
        }
    }
?>