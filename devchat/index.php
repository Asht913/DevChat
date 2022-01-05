<?php
session_start();

include("connection.php");
include("functions.php");

$_SESSION;
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
    <title>DevChat</title>
    <link href="css/lightmode.css" rel="stylesheet" type="text/css" id="pagestyle">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="images/DevLogo.png" sizes="any" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <head>
        <!--title section-->
        <div class="headtitle">
            <h1><img src="images/DevLogo.png" id="logo" />DevChat<img src="images/DevLogo.png" id="logo2" /></h1>
        </div>


        <!---top navbar section--->
        <div class="topnav">
            <navbar>
                <a href=""><span class="material-icons">home</span>Home</a>
                <a href="accout_info_update.php"><span class="material-icons">account_circle</span>Account</a>
                <a href="logout.php"><span class="material-icons">logout</span>Logout</a>
                <a class="dropdown"><span class="material-icons">settings</span>Settings
                    <div class="dropdown-content">

                        <p><button style="width:275px;">Contact US!</button></p>
                        <p><button style="width:275px;">Account Settings</button></p>
                        <p><button onClick="swapStyleSheet()" style="width:275px;">Change Theme</button></p>
                    </div>
                </a>
                <a swapStyleSheet()> <img id="ldimg" src="images/Lightmode.png" alt=""></a>
                <p> User--<?php echo$user_data['USER_NAME'];?>-- Has Returned! his name is </p>


            </navbar>

        </div>

    </head>


    <!---main content--->
    <main>
        <!---blog section--->
        <h1 style="margin-top:50px;">DevBox</h1>
        <div class="dcblogborder">
            <div class="dcblog" id="blurid" class="active">


                <?php foreach($query as $q){?>
                <div>
                    <ul id="blog">
                        <h5><?php echo$q['user_n'] ?> </h5>
                        <p><?php echo $q['message'] ?></p>
                        <p style="text-align:right;"><?php echo $q['msg_time'] ?></p>

                    </ul>
                    <?php } ?>

                </div>

            </div>
        </div>
       
    </main>



    <footer>
        
    <form method="post">
            <label>What's on your mind?</label>
            <br>
            <p name="user_n"></p>
            <textarea name="message" row="10" cols="40" required></textarea>
            <br>
            <button name="new_post" id="button">Post</button>


        </form>

        <div class="contents">
            <div class="content1">
                <iframe src="acctinfo.php"></iframe>


            </div>
        </div>
        <div class="contents">
            <div class="content2">
                <iframe src="https://i.gifer.com/Pydv.gif"></iframe>
            </div>
        </div>


        <!---bottom navbar--->
        <div class="bottomnav">
            <a href="">Contact</a>
            <a href="">About</a>
            <a href="https://www.youtube.com" target="_blank"><img src="images/YouTube.png" class="socialmedlogo" /></a>
            <a href="https://www.tumblr.com/login" target="_blank"><img src="images/Tumblr.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="images/Facebook2.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.linkedin.com/home" target="_blank"><img src="images/LinkedIn.png"
                    class="socialmedlogo" /></a>
            <a href="https://twitter.com/?lang=en" target="_blank"><img src="images/Twitter.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.reddit.com/" target="_blank"><img src="images/Reddit.png" class="socialmedlogo" /></a>
        </div>
    </footer>
    <script src="/scripts/script.js"></script>

</body>

</html>