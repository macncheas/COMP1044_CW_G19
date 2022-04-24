<?php

include("connection.php");

$id = $_GET['del'];
$sql = "DELETE FROM book WHERE BOOK_ID = '$id'";
$data = mysqli_query($conn,$sql);

if($data)
{
    echo "deleted";
    header('Location: books.php');
    exit();
}
else
{
    echo 'Failed to delete';
    exit();
}

?>
