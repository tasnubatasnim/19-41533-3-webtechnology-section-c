<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasty Time</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>


<?php
/*
$home = "starting.php";
$login = "login.php";
$registration = "registration.php";
$blank = "";
$logout = "logout.php";
if(!($_SESSION['flag']))
{
    echo "<a href='$home'>Home</a>|<a href='$login'>Login</a>|<a href='$registration'>Registration</a>";
}
	
else {
    echo"Logged in as <a href=$blank>".$_SESSION['uname']."</a>|<a href='$logout'>Logout</a>";
}
	
/*if(!($_SESSION['flag']))
	echo "<a href='$home'>Home</a>|<a href='$login'>Login</a>|<a href='$registration'>Registration</a>";
else 
	echo"Logged in as <a href=$blank>".$_SESSION['uname']."</a>|<a href='$logout'>Logout</a>";*/

?>

  
<div class = "container1">
<div class = "navbar">
    <h2>TASTY <span> TIME </span></h2>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="Registration.php">Registration</a></li>
        <li><a href="#">Contact</a></li>

    </ul>

    <div class = "navbar-icons">
        <img src="image/man.png" alt="">
        <img src="image/menu.png" alt="">


    </div>

</div>

<div class = "banner">
    <div class = "left-column">
       <div class = "left">
        <div class = "quotes">
        <h2>Delicious food for helthy life </h2>
        <h4>we are best food maker never be late for order!</h4>
        </div>
    <div class = "searchBox">
    <input  type="text" value = "Enter your email address!" >
        <img src="image/okay.png" alt="">

        </div> 
     </div> 
     
     <div class = "btn">
        <button type = "button" class = "primary-btn">Learn More</button>
        <button type = "button">Watch video</button>
     </div>
    </div>

    <div class = "right-column">
        <div class ="right">
    <img src="image/food.png" alt="">
    </div>
     </div>

</div>
</div>
    
</body>
</html>

