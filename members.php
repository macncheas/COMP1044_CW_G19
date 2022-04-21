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

    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styletest.css">
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

  
    <div class="table">

      <div>
        <h2>List of Members</h2> 

        <span id="searchbar">
          <input type="text" id="search" onkeyup="search()" placeholder="Search..">
        </span>
      <div>

      <div class = "table_members">
      
        <table id="Members">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>ID</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Contact</th>
              <th>Type</th>
              <th>Year/level</th>
              <th>Status</th>
      
            </tr>
            <tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Firstname'];?></td>
                <td><?php echo $rows['Lastname'];?></td>
                <td><?php echo $rows['Member_id'];?></td>
                <td><?php echo $rows['Gender'];?></td>
                <td><?php echo $rows['Address'];?></td>
                <td><?php echo $rows['Contact'];?></td>
                <td><?php echo $rows['Borrowertype'];?></td>
                <td><?php echo $rows['Year_level'];?></td>
                <td><?php echo $rows['Status'];?></td>
                <td> <a href="updatemember.html" target="_top"> <img src="edit.png" alt="Edit"/>  </td>
                <td> <img src="trash.png" alt="Trash"/>  </td>
  
            </tr>
            <?php
                }
             ?>
       
          </table>
      </div>
    </div>

    <script>

      //function to search table

      function search(){

        var input, filter, table, tr, td, i, txtValue;

        //get the input user typed
        input = document.getElementById("search");
  
        filter = input.value.toUpperCase();
        table = document.getElementById("Members");
        tr = table.getElementsByTagName("tr");
      
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      </script>
  

</body>

</html>
