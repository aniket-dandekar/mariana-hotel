<?php
session_start();
if(isset($_SESSION['email'])){

}else{
    echo "<script>alert('Please login to continue');window.location='../login/index.php';</script>";
}
?>