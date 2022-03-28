<?php
	#temporary dump for code which I prepared in the wrong file but would be wasteful to delete.

    //pull necessary user data for the request
    $pullUserData = $conn->query("SELECT `id`, `firstname`, `infix`, `lastname`, `email` FROM `users`");
    //pull necessary warehouse data for the request
    $pullWarehouseData =$conn->query("SELECT `id`, `Name`, `available`, `amount` FROM  `warehouse`");
?>