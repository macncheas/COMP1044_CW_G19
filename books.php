<?php
    
    include('connection.php');

    $sql = "SELECT * FROM book";
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
        <h2>List of Books</h2> 

        <span id="searchbar">
          <input type="text" id="search" onkeyup="search()" placeholder="Search..">
        </span>
      <div>

      <div class = "table_books">
      
        <table id="Books">
            <tr>
              <th>ID</th>
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
            
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
                  echo "
                  <tr>
                  <td>".$rows['Book_id']."</td>
                  <td>".$rows['Book_title']."</td>
                  <td>".$rows['Catergory_id']."</td>
                  <td>".$rows['Author']."</td>
                  <td>".$rows['Publisher_name']."</td>
                  <td>".$rows['Copyright_year']."</td>
                  <td>".$rows['Isbn']."</td>
                  <td>".$rows['Book_copies']."</td>
                  <td>".$rows['Status']."</td>
                  <td>".$rows['Date_added']."</td>
                  <td> <a href= 'delete.php?del=$rows[Book_id]'> Delete</td>
                  </tr>
                  ";
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
