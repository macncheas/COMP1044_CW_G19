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
              <th>Date published</th>
              <th>ISBN</th>
              <th>Copies Available</th>
              <th>Status</th>
              <th>Date Added</th>
      
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
              <td>Germany</td>
              <td> <img src="trash.png" alt="Trash"/>  </td>
  
            
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
              <td>Germany</td>
              <td>  <img src="trash.png" alt="Trash"/>  </td>
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
              <td>Germany</td>
              <td>  <img src="trash.png" alt="Trash"/>  </td>

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