<?php
include("../includes/connection.php");
$room_name = $_POST['newselRoom'];
    $sql = "SELECT `r_price` FROM `room_type_details` WHERE `r_name`='".$room_name."';";
    // echo $sql;
    $result = mysqli_query($con, $sql);
    ?>
    <fieldset>
        <div class="pl-1">
            <sub>Room Charge for each day ₹ for signle room</sub>
        </div><div></div>
        <input name="cont_charge" type="text" id="cont_charge" placeholder="price will show here*" value="<?php 
                while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) 
                {
                    $r_price = $row['r_price']."₹ per day";
                    echo $row['r_price']."₹ per day";
                }
                ?>">
    </fieldset>