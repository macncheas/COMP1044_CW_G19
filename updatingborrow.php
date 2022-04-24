<?php
    include("connection.php");

    $borrowID = $_POST['BorrowID'];
    $memberID = $_POST['MemberID'];
    $dateBorrowed = $_POST['DateBorrowed'];
    $dueDate = $_POST['DueDate'];
    $bookID = $_POST['BookID'];
    $borrowStatus = $_POST['BorrowStatus'];
    $dateReturned = $_POST['DateReturned'];

    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE `borrow` SET 
        `Member_id`='$memberID',
        `Date_borrow`='$dateBorrowed',
        `Due_date`='$dueDate',
        `book_id`='$bookID',
        `borrow_status`='$borrowStatus',
        `date_return`='$dateReturned' WHERE 
        `Borrow_id`='$borrowID'");
    }
    
    header('Location: borrow.php');

?>


