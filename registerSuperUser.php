<?php
//including items that are needed

include("./db/dbConnect.php");
//selection from the database
$slt = $conn->query("SELECT * FROM `users`");
$slm = $conn->query("SELECT `rollName` FROM `roll`");
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
</html>
<?php
//insert into database
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['pass'];
    $firstName = $_POST['Firstname'];
    $infix = $_POST['infix'];
    $lastName = $_POST['lastname'];
    $rolls = $_POST['roll'];
    $qry = "INSERT INTO users values(null, '$email','$password', '$firstName', '$infix', '$lastName', '$rolls')";

    if(mysqli_query($conn, $qry)){
        echo 'User has been made';

    }else{
        echo 'There has been a problem';
    }
}
?>