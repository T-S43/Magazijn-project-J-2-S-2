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
    <!-- the title of the update-->
    <title><?= $data['title'];?></title>
</head>
<body>
<div class="container-Items">
    <div class="wrapper-Items">
        <h2 id="white">Items</h2>
        <!--the setup for the full import system to write info to the database that is called in the controller and than updated in the model-->
        <form
            id="Items-form"
            method="POST"
            action="<?php echo URLROOT; ?>/managewarehouse/items">
            <?php echo $data['nameError']; ?>
            <br>
            <input type="text" placeholder="Naam" name="name">
            <span class="invalidFeedback">
            </span>
            <br><br>
            <input type="number" placeholder="aantal" id="quantity" name="amount" min="1" max="20">
            <span class="invalidFeedback">
            </span>
            <br><br>
            <input type="number" placeholder="beschrikbaar" id="quantity" name="available" min="1" max="20">
            </select>
            <span class="invalidFeedback">
            </span>
            <br><br>
            <select name="location">
                <option selected disabled>locatie</option>
                <option value="ICT academie">ICT</option>
                <option value="Techniek academie">techniek</option>
            </select>
            <span class="invalidFeedback">
            </span>
            <br><br>
            <button id="submit" type="submit" value="submit">Invoegen</button>
        </form>
</body>
</html>