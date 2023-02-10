<?php

class BookModel
{
    public $conn;

    public function __construct()
    {   
        //Linux connection
        //require_once("/opt/lampp/htdocs/Femcoders_Library/config/Database.php");

        //Mac connection
        require_once("/Applications/MAMP/htdocs/Femcoders_Library/config/Database.php");

        //Windows connection
        //require_once("C:/xampp/htdocs/Femcoders_Library/config/Database.php");
        
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function getBooks()
    {
        $query = $this->conn->query('SELECT * FROM books');
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function getAbook($isbn)
    {
        $query = $this->conn->query("SELECT * FROM books WHERE isbn = '$isbn'");
        return  $query->fetch_assoc();
    }

    public function addAbook($isbn, $author, $title, $description, $img)
    {
         $query = $this->conn->query("INSERT INTO books VALUES ($isbn, $author, $title, $description, $img");
    }
    
    public function updateBook($isbn, $title, $author, $description)
    {
        $query = $this->conn->query("UPDATE books SET title='$title', author='$author',description='$description' WHERE isbn='$isbn'");
       
    }





    // public function deleteBooks()
    // {
    //     $isbn = $_GET['isbn'];
    //     $query =$this->conn->query("DELETE FROM books WHERE isbn=?");
    // }
}

// $connection = new BookModel();
// var_dump($connection->getAbook(525562443));


