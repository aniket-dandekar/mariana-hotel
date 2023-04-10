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
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="../assets/css/owl-carousel.css">

    <link rel="stylesheet" href="../assets/css/lightbox.css">
    <style>
        .formerror {
            color: red;
        }
    </style>
</head>

<body>

    <?php include("../includes/navbar.php") ?>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or You can Just check-in into our hotel!</h2>
                        </div>
                        <p>You also can make a custom reservation for your needs or reception area for parties/receptions etc. Just type in your requirements in message box the datails and we will get back to you at the earliest!</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@mariana.com</a><br><a href="#">info@mariana.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-form">
                        <script src="../assets/js/contact-validate.js">
                        </script>
                        <form id="contact" action="testvalidation.php" method="post" name="myForm" onsubmit="return aniket_my_validate()">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Room Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12" id="fname">
                                    <fieldset>
                                        <sub><span class="formerror"></span></sub>
                                        <input name="cont_name" type="text" id="cont_name" placeholder="Your Name*" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12" id="femail">
                                    <fieldset>
                                    <sub><span class="formerror"></span></sub>
                                        <input name="cont_email" type="email" id="cont_email" placeholder="Your Email Address">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12" id="fphone">
                                    <fieldset>
                                        <sub><span class="formerror"></span></sub>
                                        <input name="cont_phone" type="number" id="cont_phone" placeholder="Phone Number*" required>
                                    </fieldset>
                                    <script>

                                    </script>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select name="cont_number_guests" id="cont_number_guests" required placeholder="Number Of Guests*">
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
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="">
                                        <div class="">
                                            <div style="font-size: 14px;" class="pl-3">
                                                Select check in date*
                                            </div>
                                            <input name="cont_ci_date" id="cont_ci_date" type="date" placeholder="select" min="2022-03-29" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="time" name="time" id="time">
                                            <option value="check heck in" selected hidden>check heck in</option>
                                            <option name="Breakfast" id="Breakfast">Breakfast</option>
                                            <option name="Lunch" id="Lunch">Lunch</option>
                                            <option name="Dinner" id="Dinner">Dinner</option>
                                        </select>
                                    </fieldset>
                                </div> -->
                                <div class="col-lg-6">
                                    <div id="">
                                        <div class="">
                                            <div style="font-size: 14px;" class="pl-3">
                                                Select check out date*
                                            </div>
                                            <input name="cont_co_date" id="cont_co_date" type="date" placeholder="select" min="2022-03-29" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"  id="fmessage">
                                    <fieldset><sub><span class="formerror"></span></sub>
                                        <textarea name="cont_message" rows="6" id="cont_message" placeholder="Message"></textarea>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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