<?php 

$blogq = $_POST['blogq']


// database connection

$conn = new mysqli('localhost','root','','blogpost');
if($conn->connect_error){
    die('connection failed!!!'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO blogdb (id, blog)
    VALUES (id:int, 'blog:text');");
    $stmt->blind_param("s",$blogq);
    $stmt->execute();
    echo "Post Successful"
    $stmt->close();
    $conn->close();
}
?>