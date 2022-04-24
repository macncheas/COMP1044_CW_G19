<?php
    include("connection.php");

    $result = mysqli_query($conn, "SELECT * FROM `member` WHERE `Member_id` ='" . $_GET['Member_id'] . "'");
    $row = mysqli_fetch_array($result);
?>

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
                <a href="members.php">BACK</a>
            </li>
        </div> 
    </nav>
    
    <h2>Update Member Details</h2>
    
    <form class="form" method="post" action="updatingmember.php"> 

        <div>
            <label>NAME</label> <br>
                <input class="input" type="text" name="FirstName" placeholder="First name" value="<?php echo $row['Firstname'] ?>" > <br>
                <input class="input" type="text" name="LastName" placeholder="Last name" value="<?php echo $row['Lastname'] ?>">
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
                <input class="input" type="text" name="Address" placeholder="Address" value="<?php echo $row['Address'] ?>">
            </div>
        
            <div>
                <label class="heading">CONTACT</label> <br>
                <input class="input" type="text" name="Contact" placeholder="Contact" value="<?php echo $row['Contact'] ?>">
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
                <input class="input" type="text" name="Year_Level" placeholder="Year/Level" value="<?php echo $row['Year_level'] ?>">
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
