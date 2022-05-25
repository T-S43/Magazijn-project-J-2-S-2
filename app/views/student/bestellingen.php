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

    <title><?=$data["title"]?></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>

<table class="table table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Naam</th>
      <th scope="col">Bericht</th>
      <th scope="col">Hoeveelheid</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
      <?=$data["itemRows"]?>
  </tbody>
</table>

<h3><a href="./student-index.php">Terug naar student pagina</a></h3>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>