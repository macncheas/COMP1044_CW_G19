<?php

    include('connection.php');  

    $ID=$_GET['ID'];
    $firstName=$_GET['FirstName'];
    $lastName=$_GET['LastName'];
    $gender=$_GET['Gender'];
    $address=$_GET['Address'];
    $contact=$_GET['Contact'];
    $borrowerType=$_GET['BorrowerType'];
    $yearLevel=$_GET['Year_Level'];
    $status=$_GET['Status'];

    $sql = "INSERT INTO `member`(`Member_id`, `Firstname`, `Lastname`, 
            `Gender`, `Address`, `Contact`, `Borrowertype`, `Year_level`, 
            `Status`) VALUES ('$ID','$firstName','$lastName','$gender',
            '$address','$contact','$borrowerType','$yearLevel','$status')";

    mysqli_query($conn, $sql);

    header('Location: members.php');

?>
