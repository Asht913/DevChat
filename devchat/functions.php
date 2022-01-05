<?php

function check_login($con)
{
if(isset($_SESSION['USER_ID']))
{
    $id = $_SESSION['USER_ID'];
    $query = "select * from users where USER_ID = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
    }
}

//redirect to login
header("Location: login.php");
die;
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len ; $i++) { 
        # code...
        $text .= rand(0,9);
    }

    return $text;
}



// Comment Postings and message board functions 


    $sql = "SELECT * FROM message";
    $query = mysqli_query($con, $sql);
    
    


    if(isset($_POST["new_post"])){
       $message = $_POST["message"];


        $msg_sql = "INSERT INTO message(message) VALUES ('$message')";

        mysqli_query($con, $msg_sql);

        header("location: index.php?info=post_comfirmed");
        exit();
    }


    //account info

    $acctsql = "SELECT * FROM users";
    $acctquery = mysqli_query($con, $acctsql);

    if(isset($_POST["acct_update"])){
        $firstn = $_POST["f_name"];
        $lastn = $_POST["l_name"];
        $aboutn = $_POST["a_user"];

        $acct_sql = "INSERT INTO users (f_name, l_name,a_user) VALUES ('$firstn', '$lastn', '$aboutn')";

        mysqli_query($con, $acct_sql);

        header("location: index.php?info=account_updated");
        exit();
    }



    



