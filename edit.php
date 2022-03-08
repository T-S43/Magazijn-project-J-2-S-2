<?php
include("./db/dbConnect.php");

$slt = $conn->query("SELECT * FROM `users`");

if(!$conn){
    die('error in db' . mysqli_error($conn));
}else{
    $id = $_GET['id'];
    $qry="SELECT * FROM `beoordeling` WHERE `id` = $id";
    $run= $conn->query($qry);
    if($run->num_rows>0){
        while($row=$run->fetch_assoc()){
            $email=$row['email'];
            $pass=$row['password'];
            $firstname=$row['Firstname'];
            $infix=$row['infix'];
            $lastname=$row['lastname'];
            $UserRoll=$row['roll'];
        }
    }
}
?>


<!doctype html>
<html lang="en">
<head>

</head>
<body>
<form method="post">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Type E-mail">
    <br><br>

    <label>Password</label>
    <input type="password" name="pass" placeholder="Type password">
    <br><br>

    <label>Firstname</label>
    <input type="text" name="Firstname" placeholder="Type firstname">
    <br><br>

    <label>Infix</label>
    <input type="text" name="infix" placeholder="Type infix">
    <br><br>

    <label>Lastname</label>
    <input type="text" name="lastname" placeholder="Type lastname">
    <br><br>

    <label>Roll</label>
    <select name="roll">
        <option selected disabled> select</option>
        <?php
        while($rows=$slm->fetch_assoc()){
            $roll = $rows['rollName'];
            echo "<option value='$roll'>$roll</option>";
        }
        ?>
    </select>
    <br><br>
    <!--Button-->
    <input type="submit" name="submit" value="Submit">
</form>
</body>