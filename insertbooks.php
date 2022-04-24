<?php

    include_once 'connection.php';  

    $ti=$_GET['title'];
    $ca=$_GET['category'];
    $au=$_GET['author'];
    $pu=$_GET['publisher'];
    $pn=$_GET['publisher_name'];
    $is=$_GET['isbn'];
    $cy=$_GET['copyright_year'];
    $ca=$_GET['copies_avail'];
    $st=$_GET['status'];

    $sql = "INSERT INTO `book`(`Book_title`, `Catergory_id`, `Author`, 
            `Book_pub`, `Publisher_name`, `Copyright_year`, `Book_copies`, 
            `Status`, `Isbn`) VALUES ('$ti','$ca','$au','$pu','$pn','$cy','$ca',
            '$st', '$is')";

    mysqli_query($conn, $sql);

    header('Location: books.php');


?>
