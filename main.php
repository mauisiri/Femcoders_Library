<?php
include("connection.php");

$sql = "SELECT author, title, isbn, description, img FROM books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Author: " . $row["author"]. "Title: " . $row["title"]. "ISBN: " . $row["isbn"]. "Description: " . $row["description"]. "Book cover: " . "<br>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>