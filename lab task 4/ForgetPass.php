<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <?php
    session_start();
    include 'head.php';
    $error = $pass = "";

    static $flag = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data = file_get_contents("data.json");

        $data = json_decode($data,true);

        foreach($data as $row)
        {
            if($row["e-mail"] == $_POST["email"])
            {
                $pass = $row["password"];
                $flag = 1;
                break;
            }
        }
        if($flag!=1)
        {
            $pass = "Email didn't match";
        }
    }

    ?>

    <fieldset>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <fieldset>
    <legend>Forgot Password</legend>
    Enter Email:<input type="text" name="email">
    <hr/>
   <input type="submit">
   </fieldset>
    </form>
    </fieldset>

    <?php
    echo $pass;
    ?>
</body>
</html>

