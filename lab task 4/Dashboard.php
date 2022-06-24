<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <fieldset>
        <?php
            session_start();

            include 'head.php'?>
        
    </fieldset>

    <table>
        <td>
            <fieldset>
                <h2>Account</h2>
            
        <hr>
    <ul>
        <li><a href="Dashboard.php">Dashboard</a></li>
        <li><a href="Profile.php">Profile</a></li>
        <li><a href="EditProfile.php">Edit Profile</a></li>
        <li><a href="CngProfilepic.php">Change Profile Picture</a></li>
        <li><a href="ChangePass.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
   

        </td>
    <td>
        <fieldset>
            <?php echo "Hello ".$_SESSION['uname']."";?>
        </fieldset>
    </td>
    </fieldset>
    </table>
</body>
</html>

