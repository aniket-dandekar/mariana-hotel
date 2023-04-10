<?php

include("../includes/connection.php");

// Collect post variables
$name = $_POST['res_name'];
$email = $_POST['res_email'];
$phone = $_POST['res_phone'];
$room_type = $_POST['res_room_type'];
$number_rooms = $_POST['res_number_rooms'];
$number_guests = $_POST['res_number_guests'];
$ci_date = $_POST['res_ci_date'];
$co_date = $_POST['res_co_date'];
$message = $_POST['res_message'];
$dt = time();
// mysql query for no repeatation check
$sql = "SELECT * FROM `room_booking` WHERE `res_name`='$name' AND `res_phone`='$phone' AND `res_email`='$email' AND `res_cidate`='$ci_date' AND `res_codate`='$co_date' AND `res_room`='$room_type' AND `res_no_of_room`='$number_rooms' AND `res_no_guests`='$number_guests'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)!=0){
    echo "<script>alert('Your booking is already done!');window.location='index.php';</script>";
}

else{
    // mysql query for insertion
    $sql = "INSERT INTO `room_booking` (`res_name`, `res_email`, `res_phone`, `res_room`, `res_no_of_room`, `res_no_guests`, `res_cidate`, `res_codate`, `res_message`, `res_dt`) VALUES ('$name', '$email', '$phone', '$room_type', '$number_rooms', '$number_guests', '$ci_date', '$co_date', '$message', current_timestamp());";
    // echo $sql.'<br>';
    $result = mysqli_query($con, $sql);

    if ($result == 1) {
        echo "<script>alert('Your reservation was successful!');window.location='index.php';</script>";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}

?>