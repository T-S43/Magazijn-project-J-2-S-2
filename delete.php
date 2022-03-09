<?php
//including the connect from the database
include("./db/dbConnect.php");

if(!$conn){
    die('error in db' . mysqli_error($conn));
}

$id = $_GET['id'];

$try="DELETE FROM `users` WHERE `id`= $id";
if(mysqli_query($conn, $try)){
    header("Refresh: 0; ./registerSuperUser.php");
}else{
    echo mysqli_error($conn);
}
?>