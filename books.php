<?php
    
    include('connection.php');

    error_reporting(E_ALL);
ini_set('display_errors', 'On');

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
              <th>Publisher Add.</th>
              <th>Copyright year</th>
              <th>ISBN</th>
              <th>Copies Available</th>
              <th>Status</th>
              <th>Date Added</th>
      
            </tr>
            
            <?php  
                while($rows=$result->fetch_assoc())
                {
                  echo "
                  <tr>
                  <td>".$rows['Book_id']."</td>
                  <td>".$rows['Book_title']."</td>
                  <td>".$rows['Catergory_id']."</td>
                  <td>".$rows['Author']."</td>
                  <td>".$rows['Publisher_name']."</td>
                  <td>".$rows['Book_pub']."</td>
                  <td>".$rows['Copyright_year']."</td>
                  <td>".$rows['Isbn']."</td>
                  <td>".$rows['Book_copies']."</td>
                  <td>".$rows['Status']."</td>
                  <td>".$rows['Date_added']."</td>
                  <td> <a href= 'deletebook.php?del=$rows[Book_id]'> Delete</td>
                  </tr>
                  ";
                }
            ?>
            
          </table>
      </div>

      <a href="addbooks.php" target="_top"> <img src="add.png" alt="Add"/> 
      
    </div>

    <script>

function search()
    {
       
        var input, filter, table, section, column, i, j, txtValue, display;

        //get the input user typed
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("Books");
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
            {//will be hidden if no match is found
              section[i].style.display = "none";
            }
          
        }
    }
      </script>
  
</body>

</html>
