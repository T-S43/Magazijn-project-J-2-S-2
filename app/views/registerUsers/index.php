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
            background-color: #484e53 !important;
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
<form method="POST"
      action="<?php echo URLROOT; ?>/registerUsers/index">
      <?php echo $data['emailError']; ?>

    <br>
    <label id="white">E-mail</label>
    <input type="email" name="email" placeholder="Type E-mail">
    <br><br>

    <label id="white">Password</label>
    <input type="password" name="pass" placeholder="Type password">
    <br><br>

    <label id="white">Firstname</label>
    <input type="text" name="firstname" placeholder="Type firstname">
    <br><br>

    <label id="white">Infix</label>
    <input type="text" name="infix" placeholder="Type infix">
    <br><br>

    <label id="white">Lastname</label>
    <input type="text" name="lastname" placeholder="Type lastname">
    <br><br>

    <label id="white">Roll</label>
    <select name="UserRoll">
        <option selected disabled> select</option>
        <option value="Student">student</option>
        <option value="SuperUser">super user</option>
    </select>
    <br><br>
    <!--Button-->
    <button id="submit" type="submit" value="submit">Invoegen</button>
</form>

    <!--The read from the database-->
    <h3>Results List</h3>
    <table class="table table-hover table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Tussenvoegsel</th>
                <th scope="col">Achternaam</th>
                <th scope="col">roll</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
    <tbody class="table-group-divider">
      <?=$data["usersData"]?>
    </tbody>
</table>
</body>
</html>