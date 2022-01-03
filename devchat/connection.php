<?php

$dbhost = "localhost";
$dbuser = "wizardbreadcp_wizardbread";
$dbpass = "Vanmooter1..";
$dbname = "wizardbreadcp_login";
$dbname = "wizardbreadcp_Devblog";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

die("failed to connect");

}