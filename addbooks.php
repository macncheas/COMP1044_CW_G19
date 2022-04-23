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
                 <a><input type="submit" id=" button" name="submit"></a>
            </li>
            <li>
                <a href="books.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Add Book</h2>
    
    <form class= "form" action="insertbook.php" method="POST"> 

        <div>
            <label>TITLE</label> <br>
             <input class="input" type="text" name="title" required> <br>
        </div>
        
        <div>
            <label>CATEGORY</label> <br>
            <select name="category">
            <option value="peri">Periodical</option>
            <option value="eng">English</option>
            <option value="math">Math</option>
            <option value="sci">Science</option>
            <option value="ency">Encyclopedia</option>
            <option value="phil">Pilipiniana</option>
            <option value="news">Newspaper</option>
            <option value="gen">General</option>
            <option value="ref">References</option>
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
                <label class="heading">COPIES AVAILABLE</label> <br>
                <input class="input" type="text" name="copies_avail" required>
            </div>

            <div>
            <label>STATUS</label> <br>
            <select name="status">
            <option value="arch">Archive</option>
            <option value="dmg">Damage</option>
            <option value="lost">Lost</option>
            <option value="new">New</option>
            <option value="old">Old</option>
            </select>
            </div>
    
        </form>
    
</body>

</html>

<?php

    include('connection.php');  

    $ti=$_GET['title'];
    $ca=$_GET['category'];
    $au=$_GET['author'];
    $pu=$_GET['publisher'];
    $pn=$_GET['publisher_name'];
    $cy=$_GET['copyright_year'];
    $ca=$_GET['copies_avail'];
    $st=$_GET['status'];

    $sql = "INSERT INTO `book`(`Book_title`, `Catergory_id`, `Author`,
            `Book_pub`, `Publisher_name`, `Copyright_year`, `Book_copies`,
             `Status`) VALUES ('$ti','$ca','$au','$pu','$pn','$cy','$ca',
             '$st')";

    echo "$ti";
    echo "$ca";
    echo "$au";


?>
