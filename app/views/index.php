<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>
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

      a {
        color: rgb(30, 213, 226) !important;
        text-decoration: none !important;
      }
    </style>
    <title><?=$data["title"]?></title>
</head>
<body>

<ul>
    <h1>
        <li>
            <a href="<?php echo URLROOT; ?>/new/newsystem">New system</a>
        </li>
        <li>
            <a href="../../public/startpage.php">the old system/pages</a>
        </li>
    </h1>
</body>
</html>