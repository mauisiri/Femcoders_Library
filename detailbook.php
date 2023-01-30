<?php
 include("connection.php");

$getIsbn = $_GET['isbn'];
$sql = "SELECT isbn, author, title, description, img FROM books where isbn=?";

$stmt= $conn->prepare($sql);
$stmt->bind_param("s", $getIsbn);

if($stmt->execute()){
    $result = $stmt->get_result();
    if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    } 

    //echo "No of records : ".$result->num_rows."<br>";
    $row=$result->fetch_object();

    echo "Author: " . $row->author. "Title: " . $row->title. "ISBN: " . $row->isbn. "Description: " . $row->description. "Book cover: " . "<br>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->img) .'" />';
}
else{
    echo $connection->error;
}



/* $user = $stmt->get_result()->fetch_assoc();
//$row = mysql_fetch_row($result);
echo "<pre>";
print_r($user);
echo "</pre>"; */
/* echo $row[0];
echo "Author: " . $row["author"]. "Title: " . $row["title"]. "ISBN: " . $row["isbn"]. "Description: " . $row["description"]. "Book cover: " . "<br>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["img"]) .'" />';
 */
mysqli_close($conn);
?>