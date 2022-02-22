<?php
include('./db/dbConnect.php');
// include('./login.php');
session_start();
?>
<h2>Welkom <?php echo($_SESSION["firstname"])?> <?php echo($_SESSION["lastname"])?></h2>