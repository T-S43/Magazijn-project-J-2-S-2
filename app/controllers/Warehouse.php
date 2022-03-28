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
            $rows .= "<td>" . $value->id . "</td><td> " . $value->Name . "</td><td> " . $value->Amount . "</td><td> " . $value->available . "</td><td> " . $value->LocationID . "</td> ";
            $rows .= "</tr>";
        }
        $data = [
            'title' => 'Home page',
            'warehouseData' => $rows
        ];

        $this->view('warehouse/index', $data);
    }
}