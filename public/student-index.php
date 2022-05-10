<?php
include('./functions/userRoleSystem.php');
if (! ($userRole == "4") ) {
    session_unset();
    header("Refresh: 0; ./startpage.php");
}
// choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student
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
    <h1>
        <a href="student_bestellingen.php">Bestellingen bekijken</a>
    </h1>

    <h1>
        <a href="student.php">Voorwerpen aanvragen</a>
    </h1>



</body>
</html>