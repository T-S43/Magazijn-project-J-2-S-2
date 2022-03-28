<?php
class Warehouse extends Controller {
    public function __construct() {
        $this->warehouseModel = $this->model('Warehouses');
    }

    public function index() {
        $warehouseData = $this->warehouseModel->getWarehouse();
        $rows = "";
        foreach($warehouseData as $value) {
            $rows .= $value->id . " " . $value->Name . " " . $value->Amount . " " . $value->available . " " . $value->LocationID ;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'Home page',
            'warehouseData' => $rows
        ];

        $this->view('warehouse/index', $data);
    }
}