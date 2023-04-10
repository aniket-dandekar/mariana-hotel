<?php
include("../includes/connection.php");
$uname = $_POST['email'];
$password = base64_encode ($_POST['password']);

// refer user table
$sql="SELECT * FROM user WHERE email='".$uname."' && password='".$password."' limit 1";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){

    session_start();
    while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
        {
            $_SESSION['email'] = $row['email'];

        }
        header("location: page.php");
        exit;
    }

else{
    echo "<script>alert('wrong username or password');window.location='login.php';</script>";
    exit;
    }
?>