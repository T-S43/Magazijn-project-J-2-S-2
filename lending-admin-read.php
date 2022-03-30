<?php
include('./functions/userRoleSystem.php');
if (!($userRole == "2")) {
    session_unset();
    header("Refresh: 0; ./index.php");
}
// choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student

//retrieve all data from the lend table
$pullLendRequest = $conn->query("SELECT * FROM `lend`");

// check if the right information is send
if (!$conn) {
    die('error in db' . mysqli_error($conn));
}
$listLendRequests = "";
while ($request = mysqli_fetch_assoc($pullLendRequest)) {
    $listLendRequests .= "<tr>
        <td  class='generated-text'>" . $request["lendID"] . "</t>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["warehouseID"] . "</td>
    </tr>
    
    <tr>
        <td class='generated-text'>" . $request["warehouseItem"] . "</td>
    </tr>
    <tr>    
        <td class='generated-text'>" . $request["warehouseAvailable"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["warehouseAmount"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["userID"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["userFirstname"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["userInfix"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["userLastname"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["userEmail"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["timestamp"] . "</td>
    </tr>
    <tr>
        <td class='generated-text'>" . $request["lendApproved"] . "</td>
    </tr>
</tr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</html>
<h2>Welkom <?php echo ($_SESSION["firstname"]) ?> <?php echo ($_SESSION["lastname"]) ?></h2>
<h2>User roll = <?php echo ($_SESSION["UserRoll"]) ?></h2>

<title>Document</title>
</head>

<body>
    <table>
        <tr>Lend ID</tr>
        <tr>Warehouse ID</tr>
        <tr>Item</tr>
        <tr>Available</tr>
        <tr>Amount</tr>
        <tr>User ID</tr>
        <tr>Firstname</tr>
        <tr>Infix</tr>
        <tr>Lastname</tr>
        <tr>E-mail</tr>
        <tr>Timestamp</tr>
        <tr>Approved (0 = not approved. 1 = approved)</tr>

        <?php echo $listLendRequests; ?>
    </table>
</body>