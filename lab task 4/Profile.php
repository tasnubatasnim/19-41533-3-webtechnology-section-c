<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<fieldset>
    <?php
            session_start();

            include 'head.php';
            $data = file_get_contents('data.json');
            $data = json_decode($data,true);

            foreach($data as $row)
            {
                if($_SESSION['passkey']==$row['password'])
                {
                    $_SESSION['tname'] = $row['name'];
                    $_SESSION['tmail'] = $row['e-mail'];
                    $_SESSION['tgender'] = $row['gender'];
                    $_SESSION['day'] = $row['dd'];
                    $_SESSION['month'] = $row['mm'];
                    $_SESSION['year'] = $row['yyyy'];
                    break;
                }
            }
    ?>
    </fieldset>

    <table>
        <td>
            <fieldset>
                <h3>Account</h3> &nbsp &nbsp 
                <hr>
            <ul>
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="EditProfile.php">Edit Profile</a></li>
                <li><a href="CngProfilepic.php">Change Profile Picture</a></li>
                <li><a href="ChangePass.php">Change Password</a></li>
                 <li><a href="logout.php">Logout</a></li>
                 </ul>
            </fieldset>
        </td>

        <td>
            <fieldset>
                <legend>Profile</legend>

            Name: <?php echo $_SESSION['tname'];?> <br>
            Email: <?php echo $_SESSION['tmail'];?> <br>
            Gender: <?php echo $_SESSION['tgender'];?> <br>
            Date Of Birth:<?php echo "".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'].""?> <br>
            </fieldset>
        </td>
    </table>
    
</body>
</html>

