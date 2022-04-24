<?php

include("connection.php");

$id = $_GET['del'];

$sql = "DELETE FROM member WHERE Member_id = '$id'";

$data = mysqli_query($conn,$sql);

if($data)
{
    echo "deleted";
    header('Location: members.php');
    exit();
}
else
{
    echo 'Failed to delete';
    exit();
}

?>
