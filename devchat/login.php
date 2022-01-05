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
            //read from database
            $query = "select * from users where USER_NAME = '$USER_NAME' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0) 
                {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                    {
                        $_SESSION['USER_ID'] = $user_data['USER_ID'];
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password!";

       }else 
       {
           echo "Wrong username or password!";
       }
    }


?>

<!DOCTYPE html>
<head>
  <title>Login</title>
  <link href="css/login.css" rel="stylesheet">
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
    <div class="login1">
    <form method="POST" class="content">
      <h1>Welcome Back to the Chat!</h1>
      <label class="labels" for="username">USERNAME OR EMAIL</label>
      <br>
      <input class="inputs" type="text"  name="USER_NAME" required>
      <br>
      <label class="labels" for="password">PASSWORD</label>
      <br>
      <input class="inputs" type="password" id="password" name="password" required>
      <br>
      <br>
      <input class="submit1" type="submit" value="Login">
      <p><a href="">Forgot your password?</a></p>
      <p>Don't have an account? Click <a href="register.php">here</a> to get started!</p>
    </form>
    </div>
    
  </main>


</body>

  </html>
