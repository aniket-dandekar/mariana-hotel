<?php
include("../login/session-validate.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Mariana Hotel | Contact Us
    </title>

    <!-- Favicons -->
    <link href="../assets/images/icon/Marianacicularcut.png" rel="icon">
    <link href="../assets/images/icon/Marianacicularcut.png" rel="apple-touch-icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="../assets/css/owl-carousel.css">

    <link rel="stylesheet" href="../assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .formerror {
            color: red;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#res_room_type").change(function() {
                selRoom = $("#res_room_type").val();
                console.log(selRoom);
                $("#fcharge").load("set-charge.php", {
                    newselRoom: selRoom
                });
            })
        })
    </script>
    <script>
        function clearErrors() {
            errors = document.getElementsByClassName('formerror');
            for (let item of errors) {
                item.innerHTML = "";
                document.getElementById("res_name").style.borderColor = "#ced4da";
                document.getElementById("res_email").style.borderColor = "#ced4da";
                document.getElementById("res_message").style.borderColor = "#ced4da";
                document.getElementById("res_phone").style.borderColor = "#ced4da";
            }
        }

        function seterror(id, error) {
            //sets error inside tag of id 
            element = document.getElementById(id);
            element.getElementsByClassName('formerror')[0].innerHTML = error;
        }

        function aniket_my_validate() {
            var returnval = true;
            clearErrors();

            var res_name = document.forms['myForm']["res_name"].value;

            if(isNaN(res_name)){
                if (res_name.trim().length < 5) {
                    var returnval = false;
                    //console.log("length is too short"+ res_name);
                    fcname = document.getElementById("res_name");
                    fcname.style.borderColor = "red";
                    // alert("length of name is short")
                    seterror("fname", "*Length of name is too short");
                    return returnval;
                }
            }
            else{
                var returnval = false;
                //console.log("length is too short"+ res_name);
                fcname = document.getElementById("res_name");
                fcname.style.borderColor = "red";
                // alert("length of name is short")
                seterror("fname", "*Please enter a valid name!");
                return returnval;
            }

            var res_phone = document.forms['myForm']["res_phone"].value;

            if (res_phone.length > 10 || res_phone.length < 10) {
                var returnval = false;
                fcname = document.getElementById("res_phone");
                fcname.style.borderColor = "red";
                if(res_phone.length < 10){
                    seterror("fphone", "*Length of number is too short");
                    return returnval;
                }else{
                    seterror("fphone", "*Length of number is too long");
                    return returnval;
                }
            }

            var res_email = document.forms['myForm']["res_email"].value;

            if (res_email.trim().length > 30) {
                var returnval = false;
                //console.log("length is too short"+ res_name);
                fcname = document.getElementById("res_email");
                fcname.style.borderColor = "red";
                // alert("length of name is short")
                seterror("femail", "*Length of email is too long");
                return returnval;
            }

            var res_message = document.forms['myForm']["res_message"].value;

            if (res_message.trim().length > 255) {
                var returnval = false;
                //console.log("length is too short"+ res_name);
                fcname = document.getElementById("res_message");
                fcname.style.borderColor = "red";
                // alert("length of name is short")
                seterror("fmessage", "*Length of email is too long");
                return returnval;
            }

            return returnval;
        }
    </script>
</head>

<body>

    <?php include("../includes/navbar.php") ?>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Make a reservation</h6>
                        <h2>Do you find it Complex? just give us a call and we'll book a room for you!</h2>
                        <h2>Check rooms <a href="rooms.php">here</a></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form id="contact" action="make_reservation.php" method="post" name="myForm" onsubmit="return aniket_my_validate()">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Room Reservation</h4>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="fname">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Name will go into our guestbook</sub>
                                        </div>
                                        <sub><span class="formerror"></span></sub>
                                        <input name="res_name" type="text" id="res_name" placeholder="Your Name*" value="<?php echo $_SESSION['username']; ?>" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="femail">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>You'll receive emails on this address</sub>
                                        </div>
                                        <sub><span class="formerror"></span></sub>
                                        <input name="res_email" type="email" id="res_email" placeholder="Your Email Address" value="<?php echo $_SESSION['email']; ?>" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="fphone">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Contact number</sub>
                                        </div>
                                        <sub><span class="formerror"></span></sub>
                                        <input name="res_phone" type="number" id="res_phone" placeholder="Phone Number*" value="<?php echo $_SESSION['phone']; ?>" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="fname">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Type of room you want book</sub>
                                        </div>
                                        <select name="res_room_type" id="res_room_type" required placeholder="Number Of Guests*">
                                            <option value="" selected="" hidden="">Select room type*</option>
                                            <?php
                                            $sql = "SELECT `r_name` FROM `room_type_details`;";
                                            $result = mysqli_query($con,$sql);
                                            while($row = mysqli_fetch_array($result)):;?>
                                                <option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>

                                                <?php endwhile;?>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="femail">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Number of rooms*</sub>
                                        </div>
                                        <sub><span class="formerror"></span></sub>
                                        <select name="res_number_rooms" id="res_number_rooms" required placeholder="Number Of Rooms*">
                                            <option value="" selected="" hidden="">Number Of Rooms*</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option>More? specify in message box</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-sm-8" id="fcharge">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Room Charge for each day ₹ for signle room</sub>
                                        </div>
                                        <input name="res_charge" type="text" id="res_charge" placeholder="price will show here*" value="">
                                    </fieldset>
                                </div>
                                <div class="col-md-4 col-sm-8">
                                    <fieldset>
                                        <div class="pl-1">
                                            <sub>Select Number of guests</sub>
                                        </div>
                                        <select name="res_number_guests" id="res_number_guests" required placeholder="Number Of Guests*">
                                            <option value="" selected="" hidden="">Number Of Guests*</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option name="7" id="7">7</option>
                                            <option name="8" id="8">8</option>
                                            <option name="9" id="9">9</option>
                                            <option name="10" id="10">10</option>
                                            <option name="11" id="11">11</option>
                                            <option name="12" id="12">12</option>
                                            <option>More? specify in message box</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <div id="">
                                        <div class="">
                                            <div class="pl-1">
                                                <sub>Select check in date*</sub>
                                            </div>
                                            <input name="res_ci_date" id="res_ci_date" type="date" placeholder="select" min="<?php echo date("Y-m-d"); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div id="">
                                        <div class="">
                                            <div class="pl-1">
                                                <sub>Select check out date*</sub>
                                            </div>
                                            <input name="res_co_date" id="res_co_date" type="date" placeholder="select" min="<?php echo date("Y-m-d"); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="fmessage">
                                    <fieldset><sub><span class="formerror"></span></sub>
                                        <textarea name="res_message" rows="6" id="res_message" placeholder="Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <?php include("../includes/footer.php"); ?>


    <!-- jQuery -->


    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>