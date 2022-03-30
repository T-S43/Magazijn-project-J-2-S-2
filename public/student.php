<?php
include('./functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./startpage.php");
}
// choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student

$sql = "SELECT * FROM `warehouse`";
$result = mysqli_query($conn, $sql);

// record is used for the table top row.
$record = "";
 
    echo "<table>";
    echo "<tr>";
    echo "<th>Naam</th>";
    echo "<th>Hoeveelheid</th>";
    echo "<th>Aanvragen?</th>";
    echo "</tr>";
// records goes through all records that come through the database and prints them out if the requirement is correct.
    $records = "";

while ($record = mysqli_fetch_assoc($result)) {
    if($record["available"] == 1) {
        $records .= "<tr><td>" .
            $record["Name"] . "</td><td>" .
            $record["Amount"] . "</td>" .
                "<td>
                    <a href='./student_aanvragen.php?id=" . $record ["id"] . "'>[X]</a>
                </td>
            </tr>";
        }
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
<a href="student_bestellingen.php">Bestellingen bekijken</a>



</body>
</html>