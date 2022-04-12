<!-- ?php
    if (! ($userRole == "4") ) {
        session_unset();
        header("Refresh: 0; ./index.php");
    }
? -->
<!-- // choose between 1: super user,    2: warehouse-admin,     3: financial admin,     4: student -->

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
<br> <a href="">Terug naar ... gaan</a>


</body>
</html>