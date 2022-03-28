<?php
include('./functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./index.php");
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
        // AND locationthingy
        $records .= "<tr><td>" .
            $record["Name"] . "</td><td>" .
            $record["Amount"] . "</td>" .
                "<td>
                    <a href='./student_aanvragen.php?id=" . $record ["id"] . "'>X</a>
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


<h1><p><?php echo $records?></p></h1>

<!-- Check out the modal -->
<!-- <div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Some text. Some text. Some text.</p>
        <p>Some text. Some text. Some text.</p>
      </div>
    </div>
  </div>
</div> -->

</body>
</html>