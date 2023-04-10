<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mariana";

$con = mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
} else{
    // echo "connection to db successful";
}
?>