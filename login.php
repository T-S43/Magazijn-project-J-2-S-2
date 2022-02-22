<?php
    include_once("./db/dbConnect.php");
    session_start();

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * from `users` WHERE `email` = '$email' AND `pass` = '$pass'";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) === 1){
        echo "Successful login";

        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
            $_SESSION["email"] = $record["email"];
            $_SESSION["firstname"] = $data["firstname"];
            $_SESSION["lastname"] = $data["lastname"];
        header("Refresh: 0; ./test.php");
    } else {
        // if email, password or both fails
        $message = "Your credentials are not correct.";
        echo $message;
        header("Refresh: 0; ./index.php");
    }
?>