
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasty time</title>
</head>
<body>

<fieldset>
    <?php
        session_start();
         include 'head.php';  
    ?>
    </fieldset>
    
<?php 
$name  =  $pass = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data = file_get_contents ("data.json");

    $data = json_decode ($data, true);

    foreach($data as $row)
    {
        if($row['username']==$_POST['uname'] && $row ['password'] == $_POST['pass'])
                {
                    $_SESSION['flag'] = 1;
                    $_SESSION['uname'] = $_POST['uname'];
                    $_SESSION['passkey'] = $row['password'];
                    header("location: Dashboard.php");

                    break;
                }
    }

    if($_SESSION['flag']!=1) $error = "Invalid Username or Password";

    $_COOKIE['us'] = "";
    $_COOKIE['password'] = "";

    if(isset($_POST['remember']))
    {

        setcookie('us', $_POST['uname'], time()+30);
        setcookie('password',$_POST['pass'], time()+30);
    }
    
}


?>

<fieldset>
 <form method = "POST" action="<?php echo htmlspecialchars ($_SERVER ["PHP_SELF"]); ?> ">
<fieldset>

 <legend>LOGIN</legend>
 username: <input type="text" name = "uname" value = "<?php { if(isset($_COOKIE['us'])) echo $_COOKIE['us'];}?>"><br>
 Password:<input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>">

 <hr>

 <input type="checkbox" name = "remember"> Remember me <br>
 <input type="submit"> <a href="ForgetPass.php">Forget Password</a>

</fieldset>
</form>
</fieldset>

<?php
echo $error;
?>
</body>
</html>
