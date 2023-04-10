<?php
include("../includes/connection.php");
// for new user sign up
if(isset($_POST['su_email'])){
    $su_username = $_POST['su_username'];
    $su_email = $_POST['su_email'];
    $su_phone = $_POST['su_phone'];
    $su_password = base64_encode($_POST['su_password']);
    $sql = "SELECT * FROM `user_data` WHERE `user_email`='".$su_email."';";
    // echo $sql;
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==0){
        $sql = "INSERT INTO `user_data` (`user_name`, `user_email`, `user_password`, `user_phone`, `user_dt`) VALUES ('$su_username', '$su_email', '$su_password', '$su_phone', current_timestamp())";
        // echo $sql;
        $result = mysqli_query($con,$sql);

        session_start();
        $_SESSION['username'] = $su_username;
        $_SESSION['email'] = $su_email;
        $_SESSION['phone'] = $su_phone;
        echo "<script>alert('Your login was created succefully! you can now book a room!');window.location='../default/book-room.php';</script>";
    }
    else{
        echo "<script>alert('Your email already exists in our database, please try forgot password!');window.location='forgot-password.php';</script>";
    }
}

// for existing user sign in
if(isset($_POST['si_email'])){
    $si_email = $_POST['si_email'];
    $si_password = base64_encode($_POST['si_password']);
    $sql = "SELECT * FROM `super_admin_login` WHERE `email`='".$si_email."' AND `password`='".$si_password."';";
    // echo $sql;
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)!=0){
        while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) 
        {
            session_start();
            // $_SESSION['username'] = $row['name'];
            $_SESSION['username'] = 'admin';
            $_SESSION['email'] = $row['email'];
            $_SESSION['privil'] = $row['type'];
        }
        echo "<script>alert('Your login was succefull!');window.location='../admin/dashboard.php';</script>";
    }
    else{
        $sql = "SELECT * FROM `staff_login` WHERE `staff_email`='".$si_email."' AND `staff_password`='".$si_password."';";
        // echo $sql;
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)!=0){
            while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) 
            {
                session_start();
                // $_SESSION['username'] = $row['name'];
                $_SESSION['username'] = $row['staff_name'];
                $_SESSION['email'] = $row['satff_email'];
                $_SESSION['privil'] = $row['type'];
            }
            echo "<script>alert('Your login was succefull!');window.location='../admin/dashboard.php';</script>";
        }
        else{
            $sql = "SELECT * FROM `user_data` WHERE `user_email`='".$si_email."' AND `user_password`='".$si_password."';";
            // echo $sql;
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)!=0){
                while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) 
                {
                    session_start();
                    $_SESSION['username'] = $row['user_name'];
                    $_SESSION['email'] = $row['user_email'];
                    $_SESSION['phone'] = $row['user_phone'];
                }
                echo "<script>alert('Your login was succefull! Book a room now!');window.location='../default/book-room.php';</script>";
            }
            else{
                echo "<script>alert('Your login failed! try again or try forgot password!');window.location='index.php';</script>";
            }
        }
    }
}

// for forgot password
if(isset($_POST['fp_email'])){
    $fp_email = $_POST['fp_email'];
    $sql = "SELECT * FROM `user_data` WHERE `user_email`='".$fp_email."';";
    // echo $sql;
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)!=0){
        $fpsql = "SELECT * FROM `user_data` WHERE `user_email`='".$fp_email."' limit 1";
        // echo $fpsql;
        $fpresult = mysqli_query($con,$fpsql);
        if(mysqli_num_rows($fpresult)>0){
            while($row=mysqli_fetch_array($fpresult,MYSQLI_BOTH)) 
            {
                $fp_name = $row['user_name'];
                $fp_password = base64_decode($row['user_password']);
            }
            $to = $fp_email;
            $subject = "You used forgot password method to retrive password";
            $body = "Dear user ".$fp_name.", Thank you for using our services your password is ".$fp_password."   -Mariana Hotel";
            $headers = "From: thunderninja1521@gmail.com";

            mail($to,$subject,$body,$headers);
            echo "<script>alert('Password has been sent to your email address');window.location='index.php';</script>";
        }
        else{
            echo "<script>alert('There was an error, please try again!');window.location='forgot-password.php';</script>";
        }
    }
    else{
        echo "<script>alert('Your email address does not exist in server, try signing-up!');window.location='sign-up.php';</script>";
    }
}
?>