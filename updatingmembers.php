<?php

include('connection.php');  

$memberID=$_GET['Member_id'];
$firstName=$_POST['FirstName'];
$lastName=$_POST['LastName'];
$gender=$_POST['Gender'];
$address=$_POST['Address'];
$contact=$_POST['Contact'];
$borrowerType=$_POST['BorrowerType'];
$yearLevel=$_POST['Year_Level'];
$status=$_POST['Status'];

if(count($_POST)>0) {

    mysqli_query($conn, "UPDATE `member` SET 
        `Firstname`='$firstName',
        `Lastname`='$lastName',
        `Gender`='$gender',
        `Address`='$address',
        `Contact`='$contact',  
        `Borrowertype`='$borrowerType', 
        `Year_level`='$yearLevel',  
        `Status`='$status' WHERE 
        `Member_id`='$memberID'");
}

header('Location: members.php');


?> 
