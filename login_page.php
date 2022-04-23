<?php

    include("connection.php");

    if (isset($_POST['username'])) {

        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE Password='$password' AND Username='$uname' limit 1";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            header('Location: library.html');
            exit();
        }
        else{
            header('Location: login_page.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="style.css">
</head>
<body>

	<div class="container">
		<div class="top">
			<h4> MY LIBRARY</h4>
		</div>
	
		<form method="POST" action="#">
		
			<div class="form-input">
				<input type="text" name="username" placeholder="Username" required/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password" required/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="loginbtn"/>
		</form>
        
	</div>

</body>
</html>
