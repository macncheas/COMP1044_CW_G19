<?php
    $servername = "localhost";
    $username = "root";
    $password = "typePASSWORD";
    $dbname = "Lib";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Book_id, Book_title, Catergory_id, Author, Book_copies, Book_pub, Publisher_name, Isbn, Copyright_year, Date_added, Status FROM book";
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
        <h2>List of Books</h2> 

        <span id="searchbar">
          <input type="text" id="search" onkeyup="search()" placeholder="Search..">
        </span>
      <div>

      <div class = "table_books">
      
        <table id="Books">
            <tr>
              <th>Title</th>
              <th>Category</th>
              <th>Author</th>
              <th>Publisher</th>
              <th>Publisher Name</th>
              <th>Copyright year</th>
              <th>ISBN</th>
              <th>Copies Available</th>
              <th>Status</th>
              <th>Date Added</th>
      
            </tr>
            <tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Book_title'];?></td>
                <td><?php echo $rows['Catergory_id'];?></td>
                <td><?php echo $rows['Author'];?></td>
                <td><?php echo $rows['Book_pub'];?></td>
                <td><?php echo $rows['Publisher_name'];?></td>
                <td><?php echo $rows['Copyright_year'];?></td>
                <td><?php echo $rows['Isbn'];?></td>
                <td><?php echo $rows['Book_copies'];?></td>
                <td><?php echo $rows['Status'];?></td>
                <td><?php echo $rows['Date_added'];?></td>
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
        table = document.getElementById("Books");
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
