<?php

$dbhost1 = "localhost";
$dbuser1 = "wizardbreadcp_wizardbread";
$dbpass1 = "Vanmooter1...";
$dbname1 = "wizardbreadcp_Devblog";


if(!$con = mysqli_connect($dbhost1,$dbuser1,$dbpass1,$dbname1)){

die("failed to connect Error Prefix-dbhost-blog-failed");

}
