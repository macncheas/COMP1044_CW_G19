<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "MariaDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Borrow_id, Member_id, Date_Borrow, Due_date FROM borrow";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Borrow ID: ". $row["Borrow_id"]. " - Member ID: ". $row["Member_id"]. " - Date_Borrow: ". $row["Date_Borrow"]. " - Due Date: ". $row["Due_date"]. "<br>";
        }
    } else {
        echo "0 results";
    }
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
                <a href="books.html">MY COLLECTION</a>
            </li>
            <li>
                <a href="borrow.html">BORROW</a>
            </li>
            <li>
                <a href="members.html">MEMBERS</a>
            </li>
            <li>
                <a href="loginPage.html">LOG OUT</a>
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
            <tr>
              <td>111 Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany </td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>  <a href="updateborrow.html" target="_top"> <img src="edit.png" alt="Edit"/> </td>
            
            </tr>
            <tr>
              <td>Centro zuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
              <td>Mexico</td>
              <td>  <a href="updateborrow.html" target="_top"> <img src="edit.png" alt="Edit"/> </td>

            
            </tr>
          </table>
    </div>


  

</body>

</html>
