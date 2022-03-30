<?php
include('./functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./index.php");
}
    $id = $_GET["id"];

    $sql = "SELECT * FROM `warehouse` WHERE `id` = $id";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);

// choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanvragen Document</title>
</head>
<body>
    <!-- Form action post so that admin/super user can see -->
    <form action="student_aanvragen_script.php" method="POST">
        <h1><label for="amount">Hoeveelheid?</label>
            <input type="number" id="amount" name="amount" min="1" required></h1>
        <br>
        
        <h1><label for="message">Reden voor aanvraag?</label> <br>
        <textarea id="message" name="message" rows="5" cols="60" placeholder="Vul in" required></textarea>
            <!-- <input type="text"  style="height:100px; width:200px;"></h1> -->
        <br>

        <h1><label for="location">Bezorg locatie:</label>
            <select name="location" id="location" required>
                <option value="Daltonlaan">Daltonlaan</option>
                <option value="Kaneneiland">Kaneneiland</option>
            </select></h1>
        <br>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
        <input type="submit" style="width:250px; height:30px;">
    </form>
    
</body>
</html>