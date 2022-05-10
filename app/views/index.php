<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>

<ul>
    <li>
        <a href="<?php echo URLROOT; ?>/warehouse/index">warehouse</a>
    </li>
    <li>
        <a href="<?php echo URLROOT; ?>/warehouse/Items">Items</a>
    </li>
    <li>
        <a href="<?php echo URLROOT; ?>/artikelen_informatie/index">Artikelen</a>
    </li>
    <li>
        <a href="<?php echo URLROOT; ?>/registerUsers/index">register</a>
    </li>
    <li>
        <a href="../../public/startpage.php">the old system/pages</a>
    </li>


