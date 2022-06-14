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
<!-- the title of the update-->
<h1 id ="white">Update user</h1>
<!-- the form to get the controller in the view en use it to do the methods-->
<form action="<?= URLROOT; ?>/registerUsers/edit" method="POST">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="email" name="email" id="name" value="<?= $data["row"]->email;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" id="pass" value="<?= $data["row"]->pass;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="firstname" id="firstname" value="<?= $data["row"]->firstname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="infix" id="infix" value="<?= $data["row"]->infix;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="lastname" id="lastname" value="<?= $data["row"]->lastname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="UserRoll">
                        <option value="<?=$data["row"]->UserRoll;?>"><?=$data["row"]->UserRoll;?></option>
                        <option value="Student">student</option>
                        <option value="SuperUser">super user</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?=$data["row"]->id;?>"
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="update">
                </td>
            </tr>

        </tbody>
    </table>
</form>
    </body>
    </html>