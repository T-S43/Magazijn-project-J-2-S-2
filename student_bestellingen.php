<?php
include('./functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./index.php");
}
// choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student

$userId = $_SESSION['id'];
// Left join for warehouse name or any other needed information
$sql = "SELECT * FROM `request` LEFT JOIN `warehouse` ON (request.warehouseId = warehouse.id) WHERE $userId = `userId`";

$result = mysqli_query($conn, $sql);
// record is used for the table top row.
$record = "";
    echo "<table>";
    echo "<tr>";
    echo "<th>Naam</th>";
    echo "<th>Bericht</th>";
    echo "<th>Hoeveelheid</th>";
    echo "<th>Status</th>";
    echo "</tr>";
// records goes through all records that come through the database and prints them out if the requirement is correct.
    $records = "";

while ($record = mysqli_fetch_assoc($result)) {
    if ($record['accepted'] == '0') {
        $acceptedCheck = 'Niet geaccepteerd';
    } else if ($record['accepted'] == '1') {
        $acceptedCheck = 'Geaccepteerd';
    }

        $records .= "<tr><td>" .
            $record["Name"] . "</td><td>" .
            $record["message"] . "</td><td>" .
            $record["amount"] . "</td><td>".
            $acceptedCheck . "</td></tr>";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>a {text-decoration: none;}</style>
    <title>Student</title>
</head>
<body>

<p><?=$records?></p>

<a href="student.php">Terug naar student pagina</a>


</body>
</html>