<?php
class registerUsers extends Controller {
    public function __construct() {
        //using the model of registerUser
        $this->registerUserModel = $this->model('registerUser');
    }

    public function index(){
        $usersData = $this->registerUserModel->getRegisterUser();
        $rows = "";
        $id ="";

        foreach($usersData as $value) {
            //put info in the rows
            $rows .= "<tr>";
            $rows .= "<td>" . $value->id . "</td><td> " . $value->email . "</td><td> " . $value->firstname . "</td><td> " . $value->infix . "</td><td> " . $value->lastname . "</td><td>" .$value->UserRoll ."</td> ";
            $rows .= "<td> <a href='/registerUsers/delete?id=$value->id'>delete</a></td>";
            $rows .= "<td> <a href='/registerUsers/edit/$value->id'>update</a></td>";
            $rows .= "</tr>";
        }

        //put data in array
        $data = [
            'id' => $id,
            'usersData' => $rows,
            'email'=>'',
            'pass'=>'',
            'firstname'=>'',
            'infix'=>'',
            'lastname'=>'',
            'UserRoll'=>'',
            'emailError'=>''
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email'=>$_POST['email'],
                'pass'=>$_POST['pass'],
                'firstname'=>$_POST['firstname'],
                'infix'=>$_POST['infix'],
                'lastname'=>$_POST['lastname'],
                'UserRoll'=>$_POST['UserRoll'],
                'emailError' => ''
            ];
        }

        if(empty($data['email'])){
            $data['emailError'] = 'vul een emailadres in';
        }

        if(empty($data['emailError'])){
            if($this->registerUserModel->createRegisterUser($data)){
                header('location: ' . URLROOT . '/registerUsers/index');
            } else {
                die('something went wrong.');
            }
        }

        //put the controller in the view
        $this->view('registerUsers/index', $data);
    }

    public function edit($id = null){
        //var_dump($id);

        //looking for a request that would be made in the view with the button that gives a post
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //executing the method in models
            $this->registerUserModel->updateUser($_POST);
            //returning to the index page
            header('location:' . URLROOT . '/registerUsers/index');
        }else{
            $row = $this->registerUserModel->getSingleUser($id);
            $data=[
                'title' => '<h1> Update user </h1>',
                'row' => $row
                ];
            $this->view("registerUsers/edit" , $data);
        }

    }


    public function delete(){
        // get the id we send with the page
        $id = $_GET['id'];
        //looking if we have an id
        if($id){
            //executing the method to delete a user
            $this->registerUserModel->deleteUser($id);
            header('location:' . URLROOT . '/registerUsers/index');
        }
    }
}