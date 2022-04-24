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
                <a href="books.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Add Book</h2>
    
    <form class= "form" action="insertbooks.php" method="GET"> 

        <div>
            <label>TITLE</label> <br>
             <input class="input" type="text" name="title" required> <br>
        </div>
        
        <div>
            <label>CATEGORY</label> <br>
            <select name="category">
            <option value="1">Periodical</option>
            <option value="2">English</option>
            <option value="3">Math</option>
            <option value="4">Science</option>
            <option value="5">Encyclopedia</option>
            <option value="6">Pilipiniana</option>
            <option value="7">Newspaper</option>
            <option value="8">General</option>
            <option value="9">References</option>
            </select>
        </div>

            <div>
                <label class="heading">AUTHOR</label> <br>
                <input class="input" type="text" name="author" required>
            </div>
        
            <div>
                <label class="heading">PUBLISHER</label> <br>
                <input class="input" type="text" name="publisher" required>
            </div>
        
            <div>
                <label class="heading">PUBLISHER NAME</label> <br>
                <input class="input" type="text" name="publisher_name" required>
            </div>
        
            <div>
                <label class="heading">COPYRIGHT YEAR</label> <br>
                <input class="input" type="text" name="copyright_year" required>
            </div>
        
            <div>
                <label class="heading">ISBN</label> <br>
                <input class="input" type="text" name="isbn" required>
            </div>
        
            <div>
                <label class="heading">COPIES AVAILABLE</label> <br>
                <input class="input" type="text" name="copies_avail" required>
            </div>

            <div>
            <label>STATUS</label> <br>
            <select name="status">
            <option value="Archive">Archive</option>
            <option value="Damage">Damage</option>
            <option value="Lost">Lost</option>
            <option value="New">New</option>
            <option value="Old">Old</option>
            </select>
            </div>

            <input type="submit" value="Save" name="submit" class="button">
        </form>
    
</body>

</html>
