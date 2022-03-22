<?php
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "magazijn_Mbo_Utrecht");
  define('APPROOT', dirname(dirname(__FILE__)));
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  if (!$conn ) {
    die("connection_failed".mysqli_connect_error());
}
?>