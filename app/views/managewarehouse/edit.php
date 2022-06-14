<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #484e53!important;
        }
    </style>
    <!-- the title of the update-->
    <title><?= $data['title'];?></title>
</head>
<body>
<!-- the form to get the controller in the view en use it to do the methods-->
<form action="<?= URLROOT; ?>/managewarehouse/edit" method="POST">
    <table>
        <tbody>
        <tr>
            <td>
                <input type="text" name="name" id="name" value="<?= $data["row"]->Name;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" id="quantity" name="amount" min="1" max="20" value="<?= $data["row"]->Amount;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" id="quantity" name="available" min="1" max="20" value="<?= $data["row"]->available;?>">
            </td>
        </tr>
        <tr>
            <td>
                <select name="location">
                    <option selected value="<?= $data["row"]->Location;?>"><?= $data["row"]->Location;?></option>
                    <option value="ICT academie">ICT</option>
                    <option value="Techniek academie">techniek</option>
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
    </body>
</html>