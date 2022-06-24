<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>

    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <fieldset>
        <?php
        session_start();
            include 'head.php';
            $pass_error = $curpass = $newpass = $rnewpass = ""; 
            $curpassErr = $newpassErr = $rnewpassErr = "";


            if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST["curpass"]))
            {
                $pass_error = "current password required";
            }
           
            else
            {
                $curpass = test_input($_POST["curpass"]);

                if(strcmp($curpass,"1234abc"))
                {
                    $curpassErr = "Incorrect Password";
                }
            }

            if (empty($_POST["newpass"])) 
		{
          $newpassErr = "New password is required!";
        }
        else 
		{
         $newpass = test_input($_POST["newpass"]);

          if (!strcmp($newpass,"1234abc"))
		   {
             $newpassErr = "Current and New password can't be same!";
           }  
		}
        if (empty($_POST["rnewpass"]))
        {
         $rnewpassErr = "Retype New Password is required!";
        }
       else 
       {
        $rnewpass = test_input($_POST["rnewpass"]);
         if (strcmp($newpass,$rnewpass)) 
         {
            $rnewpassErr = "Retype password and New Password need to be same!";
         }
         else
         {
              $updated = "Pasword upadated success fully";
         }
        }
    }

    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data; 
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

        <fieldset>
            <fieldset>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                <legend>Change Password</legend>
                <table>
                    <tr><td >Current Password</td><td >:<input type = "text" name = "curpass" value = "<?php echo $curpass; ?>"> <span class = "error">*<?php echo $curpassErr;?></span></td><br>
                    <tr><td ><span style = "color:green;">New Password</span></td><td >:<input type = "text" name="newpass"></td><br>
                    <tr><td ><span style = "color:red;">Retype New Password</span></td><td >:<input type = "text" name="rnewpass"></td>
                </table>
                <hr>

                <input type="submit" name = "submit">
                </form>
            </fieldset>
        </fieldset>
    </table>

    <?php
        if(isset($updated))
        {
            echo $updated;
        }
    ?>
</body>
</html>

