<?php
//including items that are needed

include("./db/dbConnect.php");
//selection from the database
$slt = $conn->query("SELECT * FROM `users`");
?>

<body>
    <form method="post">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Type E-mail">
        <br><br>

        <label>Firstname</label>
        <input type="text" name="Firstname" placeholder="Type firstname">
        <br><br>

        <label>Infix</label>
        <input type="text" name="infix" placeholder="Type infix">
        <br><br>

        <label>Lastname</label>
        <input type="text" name="lastname" placeholder="Type lastname">
        <br><br>
    </form>

</body>
