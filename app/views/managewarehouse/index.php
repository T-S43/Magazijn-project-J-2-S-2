<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #white {
            color: white !important;
        }
        body {
            background-color: #2c3034 !important;
        }

        a {
        color: rgb(30, 213, 226) !important;
        text-decoration: none !important;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- the title of the update-->
    <title><?= $data['title'];?></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body>
<h1 id="white">Warehouse</h1>
<table class="table table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Naam</th>
      <th scope="col">Aantal</th>
      <th scope="col">Beschrikbaar</th>
      <th scope="col">locatie</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
      <?=$data["warehouseData"]?>
  </tbody>
</table>
<br><br>
<button style="background-color: #212529 !important;">
    <a href="<?php echo URLROOT; ?>/managewarehouse/items">Items aanvragen</a>
</button>
</body>
</html>