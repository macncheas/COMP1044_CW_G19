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

    $sql = "SELECT Firstname, Lastname, Member_id, Gender, Address, Contact, Borrowtype, Year_level, Status FROM member";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "First name: ". ucwords($row["Firstname"]). " - Last name: ". ucwords($row["Lastname"]). " - Member ID: ". $row["Member_id"]. " - Gender: ". $row["Gender"]
            . " - Address: ". ucwords($row["Address"]). " - Contact: ". $row["Contact"]. " - Year/Level: ". $row["Year_level"]. " - Status: ". ucwords($row["Status"]). "<br>";
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
              <th>Year/level</th>
              <th>Status</th>
      
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td> <img src="trash.png" alt="Trash"/> </td>
              <td>  <a href="updatemember.html" target="_top"> <img src="edit.png" alt="Edit"/> </td>
            
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>dfcgvh</td>
              <td>Germany</td>
              <td>Germany</td>
              <td>Germany</td>
              <td> <img src="trash.png" alt="Trash"/> </td>
              <td> <a href="updatemember.html" target="_top"> <img src="edit.png" alt="Edit"/>  </td>
            </tr>

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
