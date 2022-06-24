<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile info</title>
</head>
<body>
    <fieldset>
        <?php
    session_start();
    include 'head.php';

    $data = file_get_contents("data.json");
    $data = json_decode($data, true);

    foreach($data as $row)
    {

        if($_SESSION['passkey']==$row['password'])
        {
            $_SESSION['tname']=$row['username'];
            $_SESSION['tmail']=$row['e-mail'];
            $_SESSION['tgender']=$row['gender'];
            $_SESSION['day']=$row['dd'];
            $_SESSION['month']=$row['mm'];
            $_SESSION['year']=$row['yyyy'];
            break;
        }
    }
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        if(isset($_POST['submit']))
        {
            $data = file_get_contents("data.json");

            $data = json_decode($data,true);

            foreach($data as $row)
            {

                if($_SESSION['passkey'] == $row['password'])
                {
                    $row['username'] = $_POST['usname'];

                    $row['e-mail'] = $_POST['email'];
                    $row['gender'] = $_POST['gender'];

                    break;
                }
            }

            file_put_contents('data.json', json_encode($data));
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
                <fieldset>
                <legend>Profile</legend>
                <form action="" method ="POST">
                Name:<input type="text"  name="usname"value="<?php echo $_SESSION['tname'];?>"><br>
                Email: <input type="text" name="email"value="<?php echo $_SESSION['tmail'];?>"><br>
                Date of Birth:<input type="text" value="<?php echo "".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'].""?>"><br>
                Gender: <input type="radio"  name="gender"value="male" id="male" <?php if($_SESSION['tgender']=='male') echo "checked";?>>Male
                <input type="radio" name="gender"value="female" id="female" <?php if($_SESSION['tgender']=='female') echo "checked";?>>Female
                <input type="radio" name="gender"value="other" id="other" <?php if($_SESSION['tgender']=='other') echo "checked";?>>Other
                <br>

                <input type="submit" name = "submit">
                </fieldset>
                </form>
            </fieldset>
        </td>
    </table>
</body>
</html>
