<?php
//this is a msqli connection
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "magazijn_Mbo_Utrecht");
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  if (!$conn ) {
    die("connection_failed".mysqli_connect_error());
}
  //class for a pdo connection
  class dbConnect{
      private $host="localhost";
      private $user="root";
      private $pwd="";
      private $dbName="magazijn_Mbo_Utrecht";

      protected function connect(){
          $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
          $pdo = new PDO($dsn, $this->user, $this->pwd);
          $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          return $pdo;
      }
  }