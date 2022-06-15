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
    <style>
      body {
          background-color: #2c3034 !important;
      }

      a {
        color: rgb(30, 213, 226) !important;
        text-decoration: none !important;
      }
    </style>
    <title>Student</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>
<table class="table table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Gebruiker</th>
      <th scope="col">Geacepteerd door</th>
      <th scope="col">Leen datum</th>
      <th scope="col">Retour datum</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
      <?=$data["artikelenRows"]?>
  </tbody>
</table>

<br> <a href="<?php echo URLROOT; ?>/new/newsystem">Terug naar home gaan</a>


</body>
</html>