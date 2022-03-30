<?php
include('./functions/userRoleSystem.php');
// Grabbing data not only from the page but also from the session
    $userId = $_SESSION['id'];
    $id = $_POST['id'];
    $amount = $_POST["amount"];
    $message = $_POST["message"];
    $location = $_POST["location"];
    $accepted = '0';

$sql = "INSERT INTO `request` (`id`, `userId`, `warehouseId`, `amount`, `message`, `location`, `accepted`) VALUES (NULL, '$userId','$id','$amount','$message','$location', '$accepted')";

mysqli_query($conn, $sql);
header("Location: ./student.php");
?>