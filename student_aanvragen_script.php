<?php
include('./functions/userRoleSystem.php');
    // $email = $_SESSION['email'];

// $user = "SELECT `id` FROM `users` WHERE `email` = $email";

    $userId = $_SESSION['id'];
    $id = $_POST['id'];
    $amount = $_POST["amount"];
    $message = $_POST["message"];
    $location = $_POST["location"];

$sql = "INSERT INTO `request` (`id`, `userId`, `warehouseId`, `amount`, `message`, `location`) VALUES (NULL, '$userId','$id','$amount','$message','$location')";


echo $sql;
echo "<br><br> $id <br><br> $amount <br><br> $message <br><br> $location<br><br>";
echo "$userId";
var_dump($_SESSION);

mysqli_query($conn, $sql);

// header("Location: ./student.php");
?>

<!-- $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    //schrijft de gegevens naar de tabel
    $sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `email`) VALUES (NULL, '$firstname', '$infix', '$lastname', '$email');";

    // Functie is de query sql te laten verbinden via conn naar de database.
    mysqli_query($conn, $sql);

    header("Location: ./read.php"); -->