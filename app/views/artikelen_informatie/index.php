<!-- ?php
include('../../../public/functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./index.php");
}
choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student

$acceptedCheck = ;
Left join for warehouse name or any other needed information
$sql = "SELECT * FROM `accepted_orders` LEFT JOIN `request` ON (accepted_orders.requestId = request.id)";

$result = mysqli_query($conn, $sql);
// record is used for the table top row.
$record = "";
    echo "<table>";
    echo "<tr>";
    echo "<th>Gebruiker</th>";
    echo "<th>Geacepteerd door</th>";
    echo "<th>Leen datum</th>";
    echo "<th>Retour datum</th>";
    echo "</tr>";
// records goes through all records that come through the database and prints them out if the requirement is correct.
    $records = "";

while ($record = mysqli_fetch_assoc($result)) {
    // if ($record['accepted'] == '1') {
    //     $acceptedCheck = 'Geaccepteerd';
    // } else {
    //     $acceptedCheck = 'ERROR NOTIFY YOUR ADMIN CODE:2578';
    // }

        $records .= "<tr><td>" .
            $record["Name"] . "</td><td>" .
            $record["tijdelijkAcceptieNaam"] . "</td><td>" .
            $record["dateAcceptance"] . "</td><td>".
            $record["dateRetour"] . "</td></tr>";
    }
?> -->

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

<table>
    <tr>
        <th>Gebruiker</th>
        <th>Geacepteerd door</th>
        <th>Leen datum</th>
        <th>Retour datum</th>
</tr>
<tr>
    <td><?php echo $data["artikelenRows"];?></td>
</tr>
</table>

<a href="student.php">Terug naar student pagina</a>


</body>
</html>