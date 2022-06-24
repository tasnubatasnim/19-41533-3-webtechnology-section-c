<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change profile pic</title>
</head>
<body>
    <fieldset>
    <?php



    session_start();
    include 'head.php';

 

    
       
    ?>
    </fieldset>

    <table>
        <td>
            <fieldset>
                <h3>Account</h3>  &nbsp &nbsp 
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
                <form action="imageUpload.php" method = "post" enctype="multipart/form-data">
                    <legend>Change Profile Picture</legend>
                    <input type="file" name="fileToUpload" id="fileToUpload" value = "Choose File">
                    <hr>
                    <input type="submit" name = "submit" value = "Upload Image">
                </form>
            </fieldset>
        </td>
    </table>
 

</body>
</html>
