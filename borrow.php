<?php
    include('connection.php');

    $sql = "SELECT * FROM borrowdetails";
    $result = $conn->query($sql);
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>My Library</title>
</head>
<body>
    <nav>       
        <div class="head">
            <h4> MY LIBRARY</h4>
        </div>

        <div class="links">
            <li>
                <a href="books.php">MY COLLECTION</a>
            </li>
            <li>
                <a href="borrow.php">BORROW</a>
            </li>
            <li>
                <a href="members.php">MEMBERS</a>
            </li>
            <li>
                <a href="loginPage.php">LOG OUT</a>
            </li>
        </div> 
    </nav>

    <div class="table_borrow">
        <h2>Borrow details</h2>
        <table>
            <tr>
              <th>Borrow ID</th>
              <th>Book Title</th>
              <th>Member Name</th>
              <th>Date Borrowed</th>
              <th>Due Date</th>
              <th>Date Returned</th>
              <th>Status</th>
              
            </tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Borrow_id'];?></td>
                <td><?php echo $rows['Book_id'];?></td>
                <td><?php echo $rows['Member_id'];?></td>
                <td><?php echo $rows['Date_borrow'];?></td>
                <td><?php echo $rows['Due_date'];?></td>
                <td><?php echo $rows['Date_return'];?></td>
                <td><?php echo $rows['Borrow_status'];?></td>
                <td> <a href="updateborrow.html" target="_top"> <img src="edit.png" alt="Edit"/>  </td>
  
            </tr>
            <?php
                }
             ?>
       
          </table>
    </div>


  

</body>

</html>
