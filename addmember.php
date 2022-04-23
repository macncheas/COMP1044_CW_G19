<?php
include("connection.php");
?>

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
                <a> <input type="submit" id="button" name="submit"></a>
            </li>
            <li>
                <a href="members.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Add Member</h2>
    
    <form class= "form"> 

        <div>
            <label>NAME</label> <br>
             <input class="input" type="text" placeholder="First name"> <br>
                <input class="input" type="text" placeholder="Last name">
            </div>
        
            <div>
                <label>ID</label> <br>
                <input class="input" type="text" placeholder="First name"> 
            </div>

            <div>
                <label class="heading">GENDER</label> <br>
                <input class="input" type="text" placeholder="First name">
            </div>
        
            <div>
                <label class="heading">ADDRESS</label> <br>
                <input class="input" type="text" placeholder="First name">
            </div>
        
            <div>
                <label class="heading">CONTACT</label> <br>
                <input class="input" type="text" placeholder="First name">
            </div>
        
            <div>
                <label class="heading">LEVEL</label> <br>
                <input class="input" type="text" placeholder="First name">
            </div>
        
            <div>
                <label class="heading">STATUS</label> <br>
                <input class="input" type="text" placeholder="First name">
            </div>
    
        </form>
    
</body>

</html>
