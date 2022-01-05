<?php
session_start();

    include("connection.php");
    include("functions.php");

    
?>

<!DOCTYPE html>
<head>
    <title>your Account</title>
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
        <?php foreach($acctquery as $q){?>
                <div>
                    <ul id = "blog" style="margin-top: 10px">
                        <h5><?php echo$q['f_name'] ?> </h5>
                        <p><?php echo $q['l_name'] ?></p><p><?php echo $q['a_user'] ?></p>
                    
                    </ul>
                    <?php } ?> 

    
        </div>
    </main>
</body>
</html>