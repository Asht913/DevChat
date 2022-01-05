<?php
session_start();

    include("connection.php");
    include("functions.php");

    
?>

<!DOCTYPE html>
<head>
    <title>Update Accout</title>
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
                <h1>Update Account information</h1>
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" id="text" class="inputs">
                <br>
                <label for="l_name">Last Name</label> 
                <input type="text" name="l_name" id="text" class="inputs">
                <br>
                <label for="a_user">about You</label> 
                <input type="text" name="a_user" id="text" class="inputs">
                <br>
                <input  name = "acct_update" type="submit" value="Update" class="submit1">
            </form>
        </div>
    </main>
</body>
</html>