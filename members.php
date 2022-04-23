<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('connection.php');

$sql = "SELECT * FROM member";
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
                <a href="login_page.php">LOG OUT</a>
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
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
                  echo "
                  <tr>
                  <td>".$rows['Firstname']."</td>
                  <td>".$rows['Lastname']."</td>
                  <td>".$rows['Member_id']."</td>
                  <td>".$rows['Gender']."</td>
                  <td>".$rows['Address']."</td>
                  <td>".$rows['Contact']."</td>
                  <td>".$rows['Borrowertype']."</td>
                  <td>".$rows['Year_level']."</td>
                  <td>".$rows['Status']."</td>
                  <td> <a href= 'deletemember.php?del=$rows[Member_id]'>Delete</td>
                  </tr>
                  ";
                }
            ?>
       
          </table>
      </div>
    </div>

    <script>


    function search()
    {
       
        var input, filter, table, section, column, i, j, txtValue, display;

        //get the input user typed
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("Members");
        section = table.getElementsByTagName("tr");
        display = false;
      
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < section.length; i++) 
        {
            display = false
            for(j=0; j<9; j++)
            {
                column = section[i].getElementsByTagName("td")[j];
                if (column) 
                {
                txtValue = column.textContent || column.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) 
                {
                    display = true;
                    break;
                } 

                }
            }

            if(display) 
            {
              section[i].style.display = "";
            } 
            else 
            {
              section[i].style.display = "none";
            }
          
        }
    }
      </script>

</body>

</html>
