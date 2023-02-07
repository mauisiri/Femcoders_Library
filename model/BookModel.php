<?php

class BookModel
{
    public $conn;

    public function __construct()
    {  //conexion para linux
        // require_once("/opt/lampp/htdocs/Femcoders_Library/config/Database.php");

        //conexion windows
        require_once("C:/xampp/htdocs/Femcoders_Library/config/Database.php");
        
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM books');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}

$connection = new BookModel();
print_r($connection->getBooks());