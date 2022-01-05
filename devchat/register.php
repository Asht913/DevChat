<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somethign was posted
       $USER_NAME = $_POST['USER_NAME'];
       $password =  $_POST['password'];

       if(!empty($USER_NAME) && !empty($password) && !is_numeric($USER_NAME))
       {
            //save to database
            $USER_ID = random_num(20);
            $query = "insert into users (USER_ID,USER_NAME,password) values ('$USER_ID','$USER_NAME','$password')";

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
    <link href="css/register.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="images/DevLogo.png" sizes="any"/>


</head>
<body>
    <header>
        <div class="regtitle">
            <h1><img src="images/DevLogo.png" id="logo" />DevChat<img src="images/DevLogo.png"
                    id="logo" /></h1>

        </div>
    </header>
    <main class="formborder">
        <div class="form1">

            <form method="post" class="content">
                <h1>Create Your Account</h1>
                <label for="USER_NAME">USERNAME:</label>
                <input type="text" name="USER_NAME" id="USER_NAME" class="inputs">
                <br>
                <label for="password">PASSWORD:</label> 
                <input type="password" name="password" id="password" class="inputs">
                <br>
                <input type="submit" value="submit" <!---class="submit1"--->>
            </form>
        </div>
    </main>
</body>
</html>