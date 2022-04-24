<?php
    include("connection.php");

    $result = mysqli_query($conn, "SELECT * FROM `borrow` WHERE `Borrow_id` ='" . $_GET['Borrow_id'] . "'");
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="form.css"> 
</head>
<body>

    <nav>       
        <div class="head">
            <h4> MY LIBRARY</h4>
        </div>

        <div class="links">
            <li>
                <a href="borrow.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Update Borrow Details</h2>
    
    <form class="form" method="post" action="updatingborrow.php"> 

        <div>
            <label>BORROW ID</label> <br>
             <input class="input" type="text" name="BorrowID" value="<?php echo $row['Borrow_id'] ?>"> <br>
            </div>

            <div>
                <label class="heading">MEMBER ID</label> <br>
                <input class="input" type="text" name="MemberID" value="<?php echo $row['Member_id'] ?>">
            </div>
        
            <div>
                <label class="heading">DATE BORROWED</label> <br>
                <input class="input" type="text" name="DateBorrowed" value="<?php echo $row['Date_borrow'] ?>">
            </div>
        
            <div>
                <label class="heading">DUE DATE</label> <br>
                <input class="input" type="text" name="DueDate" value="<?php echo $row['Due_date'] ?>">
            </div>

            <div>
                <label>BOOK ID</label> <br>
                <input class="input" type="text" name="BookID" value="<?php echo $row['book_id'] ?>"> 
            </div>

            <!--<div>
                <label class="heading">BORROW STATUS</label> <br>
                <input class="input" type="text" value="<?php echo $row['borrow_status'] ?>">
            </div>-->

            <div>
                <label>BORROW STATUS</label> <br>
                <select name="BorrowStatus">
                <option value="return">Returned</option>
                <option value="pending">Pending</option>
                </select>
            </div>
        
            <div>
                <label class="heading">DATE RETURNED</label> <br>
                <input class="input" type="text" name="DateReturned" value="<?php echo $row['date_return'] ?>">
            </div>
    
            <input type="submit" value="Save" name="submit" class="button">
        </form>
    
</body>

</html>
