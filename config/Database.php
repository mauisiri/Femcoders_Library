<?php
class Database {

      private $servername = "localhost";
      private $username = "root";
      private $password = "";
      // private $password = "root";
      private $dbname = "femcoders_library";

      public function connection()
{
      try {
      $conn =  new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $conn;
      } catch (Throwable $th) {
      var_dump($th);
      }
}





//$conn =  mysqli_connect($servername, $username, $password,$dbname);


// //if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
}

?> 