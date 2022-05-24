<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>a {text-decoration: none;}</style>
    <title><?=$data["title"]?></title>
</head>
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

<a href="./student-index.php">Terug naar student pagina</a>


</body>
</html>