<?php

include("../includes/connection.php");

// Collect post variables
$name = $_POST['cont_name'];
$email = $_POST['cont_email'];
$phone = $_POST['cont_phone'];
$number_guests = $_POST['cont_number_guests'];
$cidate = $_POST['cont_ci_date'];
$codate = $_POST['cont_co_date'];
$message = $_POST['cont_message'];
$t = time();
// mysql query for no repeatation check
$sql = "SELECT * FROM `contact_details` WHERE `cont_name`='$name' AND `cont_phone`='$phone' AND `cont_ci_date`='$cidate' AND `cont_co_date`='$codate'";
$query = mysqli_query($con, $sql);

if($query==true){
    echo "<script>alert('Your enquiry has already been sent, please be patient we will cantact you!');window.location='testing.php';</script>";
}

else{
    // mysql query for insertion
    $sql = "INSERT INTO `contact_details` (`cont_name`, `cont_email`, `cont_phone`, `cont_number_guest`,  `cont_ci_date`, `cont_co_date`, `cont_message`, `cont_date_time`) VALUES ('$name', '$email', '$phone', '$number_guests', '$cidate', '$codate', '$message', current_timestamp())";
    // echo $sql;
    $query = mysqli_query($con, $sql);

    if ($query == 1) {
        echo "<script>alert('Your enquiry has been sent!');window.location='testing.php';</script>";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}

?>