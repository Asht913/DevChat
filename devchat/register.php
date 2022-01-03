<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somethign was posted
       $user_name = $_POST['user_name'];
       $password =  $_POST['password'];

       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
       }else 
       {
           echo "Please enter some valid information!";
       }
    }

?>

<!DOCTYPE html>
<head>
    <title>Registration</title>
    <link href="register.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/devchatmain/images/DevLogo.png" sizes="any"/>


</head>
<body>
    <header>
        <div class="regtitle">
            <h1><img src="/devchatmain/images/DevLogo.png" id="logo" />DevChat<img src="/devchatmain/images/DevLogo.png"
                    id="logo" /></h1>

        </div>
    </header>
    <main class="formborder">
        <div class="form1">
            <form class="content">
                <h1>Create Your Account</h1>
                <label for="username">USERNAME:</label>
                <input id="username" name="username" type="text" required class="inputs">
                <br>
                <label for="usrpwd">PASSWORD:</label> 
                <input id="usrpwd" name="usrpwd" type="password" required class="inputs">
                <br>
                <label for="confpwd">RE-TYPE PASSWORD:</label>
                <input id="confpwd" name="confpwd" type="password" required class="inputs">
                <br>
                <label for="usremail">EMAIL ADDRESS:</label>
                <input id="usremail" name="usremail" type="type" required class="inputs">
                <br>
                <br>
                <input type="submit" value="Create Your Account" class="submit1" onclick="matchPassword()">
            </form>
        </div>
    </main>
    <script src="style\script.js"></script>
</body>
</html>