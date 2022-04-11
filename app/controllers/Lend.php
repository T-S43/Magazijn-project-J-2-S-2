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
                $row .= "<td>" . $lendInfo->lendID . "</td><td> " . $lendInfo->wareHouseID . "</td><td> " . $lendInfo->userID . "</td><td> " . $lendInfo->timestamp . "</td><td> " . $lendInfo->lendApproved . "</td> ";
                $row .= "</tr>";
            }
            $data = [
                'lendID' => '',
                'warehouseID' => '',
                'userID' => '',
                'timestamp' => '',
                'lendApproved' => '',
            ];

        }
    }
?>