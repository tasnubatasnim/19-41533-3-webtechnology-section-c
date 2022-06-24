<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="head.css">
</head>
<body>
	<span style = "font-size: 30px; color: #f14a60;">TASTY</span> <span style = "font-size: 25px; color: #b65461;">TIME</span>&nbsp &nbsp &nbsp

	<?php
		/*session_start();*/
    
		$home = "strarting.php";
		$login = "login.php";
		$registration = "Registration.php";
		$blank = "";
		$logout = "logout.php";
		$_SESSION['flag'] = 0;

		if(!($_SESSION['flag']))
		{
			echo "<a href='$home'>Home</a> <a href = '$login'>login</a> <a href = '$registration'>Registration</a>";
		}

		else
		{
			echo"Logged in as <a href=$blank>".$_SESSION['uname']."</a> <a href='$logout'>Logout</a>";
		}
	?>
</body>
</html>
