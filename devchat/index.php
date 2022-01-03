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
    <link href="lightmode.css" rel="stylesheet" type="text/css" id="pagestyle">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/images/DevLogo.png" sizes="any" />
</head>

<body>

    <head>
        <!--title section-->
        <div class="headtitle">
            <h1><img src="/images/DevLogo.png" id="logo" />DevChat<img src="/images/DevLogo.png"
                    id="logo" /></h1>

        </div>


        <!---top navbar section--->
        <div class="topnav">
            <navbar>
                <a href=""><span class="material-icons">home</span>Home</a>
                <a href=""><span class="material-icons">people</span>Friends</a>
                <a href="/login/login.html"><span class="material-icons">login</span>Login</a>
                <a href="/register/register.html"><span class="material-icons">app_registration</span>Register</a>
                <a class="dropdown"><span class="material-icons">settings</span>Settings
                    <div class="dropdown-content">
                        <p>Hello World!<button style="width:60px;">Click ME</button></p>
                        <p>Theme Change<button style="width:60px;">Click ME</button></p>
                        <p>Light/Dark<button style="width:60px;">Click ME</button></p>
                    </div>
                </a>
                <a onClick="swapStyleSheet()"> <img id="ldimg" src="/images/Darkmode.png" alt=""></a>
            </navbar>
        </div>
    </head>


    <!---main content--->
    <main>
        <!---blog section--->
        <div class="dcblogborder">
            <div class="dcblog" id="blurid" class="active">
                <h1>DevBox</h1>

                <div>
                    <ul style="margin-top: 10px">
                        <li>
                            <span id="personicon" class="material-icons">person</span><span>Welcome to
                                DevChat.</span>
                        </li>
                        <li>
                            <span id="personicon" class="material-icons">person</span><span>This is a blog site for
                                local developers.</span>
                        </li>
                        <li>
                            <span id="personicon" class="material-icons">person</span><span>Hope you enjoy!</span>
                        </li>
                        <li>
                            <span id="personicon" class="material-icons">person</span><span>"We all make choices in
                                life, but in the end our choices make us."</span>
                        </li>
                    </ul>
                    <form action="connect.php" method="post"></form>
                    <label for="blog">What's on your mind?</label>
                    <br>
                    <textarea id="blog" name="blog" row="10" cols="40"></textarea>
                    <br>
                    <input type="submit" name="submit" value="submit">

                    </form>
                </div>
            </div>
        </div>
        <div id="contentsection">
            <div class="contents">
                <div class="content1">
                    <iframe width="100%" height="400px" src="https://youtube.com/embed/a00NRSFgHsY"></iframe>


                </div>
            </div>
            <div class="contents">
                <div class="content2">
                    <iframe width="100%" height="400px" src="https://i.gifer.com/Pydv.gif"></iframe>
                </div>
            </div>
        </div>
    </main>



    <footer>
        <!---bottom navbar--->
        <div class="bottomnav">
            <a href="">Contact</a>
            <a href="">About</a>
            <a href="https://www.youtube.com" target="_blank"><img src="/images/YouTube.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.tumblr.com/login" target="_blank"><img src="/images/Tumblr.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="/images/Facebook2.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.linkedin.com/home" target="_blank"><img src="/images/LinkedIn.png"
                    class="socialmedlogo" /></a>
            <a href="https://twitter.com/?lang=en" target="_blank"><img src="/images/Twitter.png"
                    class="socialmedlogo" /></a>
            <a href="https://www.reddit.com/" target="_blank"><img src="/images/Reddit.png"
                    class="socialmedlogo" /></a>
        </div>
    </footer>
    <script src="style\script.js"></script>

</body>

</html>