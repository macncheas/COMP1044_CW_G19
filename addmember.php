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
           <!--<li>
                <a> <input type="submit" id="button" name="submit"></a>
            </li>-->
            <li>
                <a href="members.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Add Member</h2>
    
    <form class= "form" action="insertmember.php" method="GET"> 

        <div>
            <label>ID</label> <br>
            <input class="input" type="text" name="ID" placeholder="ID"> 
        </div>

        <div>
            <label>NAME</label> <br>
                <input class="input" type="text" name="FirstName" placeholder="First name"> <br>
                <input class="input" type="text" name="LastName" placeholder="Last name">
        </div>

            <div>
                <label>GENDER</label> <br>
                <select name="Gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
            </div>

            <div>
                <label class="heading">ADDRESS</label> <br>
                <input class="input" type="text" name="Address" placeholder="Address">
            </div>
        
            <div>
                <label class="heading">CONTACT</label> <br>
                <input class="input" type="text" name="Contact" placeholder="Contact">
            </div>

            <div>
                <label>BORROWER TYPE</label> <br>
                <select name="BorrowerType">
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                </select>
            </div>
        
            <div>
                <label class="heading">YEAR/LEVEL</label> <br>
                <input class="input" type="text" name="Year_Level" placeholder="Year/Level">
            </div>
        
            <div>
                <label>STATUS</label> <br>
                <select name="Status">
                <option value="Active">Active</option>
                <option value="Banned">Banned</option>
                </select>
            </div>
    
            <input type="submit" value="Save" name="submit" class="button">
        </form>
    
</body>

</html>
