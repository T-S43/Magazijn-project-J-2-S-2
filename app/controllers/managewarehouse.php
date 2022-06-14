<?php

class managewarehouse extends Controller
{
    public function __construct()
    {
        //using the model managewarehouses
        $this->managewarehouseModel = $this->model('managewarehouses');
    }

    public function index()
    {
        $warehouseData = $this->managewarehouseModel->getWarehouse();
        $rows = "";
        foreach ($warehouseData as $value)
        {
            //put info in the rows to write it
            $rows .= "<tr>";
            $rows .= "<td>" . $value->id . "</td><td> " . $value->Name . "</td><td> " . $value->Amount . "</td><td> " . $value->available . "</td><td> " . $value->Location . "</td> ";
            $rows .= "<td> <a href='/managewarehouse/edit/$value->id'><i class= 'bi bi-check-square'></a></td>";
            $rows .= "<td> <a href='/managewarehouse/delete?id=$value->id'><i class= 'bi bi-check-square'></a></td>";
            $rows .= "</tr>";
        }
        $title = "Manage the warehouse";
        //put the data in an array
        $data =
            [
                'warehouseData' =>$rows,
                'title' =>$title
            ];

        //put the information to the view
        $this->view('managewarehouse/index', $data);
    }
    public function items()
    {
        //put the data in an array
        $data = [
            'name' => '',
            'amount' => '',
            'available' => '',
            'location' => '',
            'nameError' => ''
        ];

        //process the form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'name' => $_POST['name'],
                'amount' => $_POST['amount'],
                'available' => $_POST['available'],
                'location' => $_POST['location'],
                'nameError' => ''
            ];
        }
        //look if the data is filled in from name
        if (empty($data['name'])) {
            $data['nameError'] = 'A.U.B voer een item in';
        }
        //looking if the error is empty to write the info to the database
        if (empty($data['nameError'])) {
            if ($this->managewarehouseModel->Items($data)) {
                //Redirect to the table page
                header('location: ' . URLROOT . '/managewarehouse/index');
            } else {
                die('Something went wrong.');
            }
        }
        //put the controller in the view
        $this->view('managewarehouse/items', $data);
    }

    public function edit($id = null)
    {
        //looking for a request that would be made in the view with the button that gives a post
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //executing the method in models
            $this->managewarehouseModel->updateitem($_POST);
            //returning to the index page
            header('location:' . URLROOT . '/managewarehouse/index');
        }else{
            $row = $this->managewarehouseModel->getSingleItem($id);
            $data=[
                'title' => '<h1> Update item </h1>',
                'row' => $row
            ];
            $this->view("managewarehouse/edit" , $data);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];

        if($id)
        {
            $this->managewarehouseModel->deleteItem($id);
            header('location:' . URLROOT . '/managewarehouse/index');
        }
    }
}