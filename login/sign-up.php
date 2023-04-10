<!doctype html>
<html lang="en">

<head>
    <title>Mariana Hotel | Sign In</title>

    <!-- Favicons -->
    <link href="../assets/images/icon/Marianacicularcut.png" rel="icon">
    <link href="../assets/images/icon/Marianacicularcut.png" rel="apple-touch-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .formerror {
            color: red;
        }
    </style>

</head>
<script>
    function clearErrors() {
        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
            document.getElementById("su_username").style.borderColor = "#ced4da";
            document.getElementById("su_email").style.borderColor = "#ced4da";
            document.getElementById("su_password").style.borderColor = "#ced4da";
            document.getElementById("su_cpassword").style.borderColor = "#ced4da";
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

        var su_username = document.forms['myForm']["su_username"].value;

        if(isNaN(su_username)){
            if (su_username.trim().length < 5) {
                var returnval = false;
                // console.log("length is too short"+ su_username);
                fcname = document.getElementById("su_username");
                fcname.style.borderColor = "red";
                // alert("length of name is short")
                seterror("fname", "*Length of name is too short");
                return returnval;
            }
        }
        else{
            var returnval = false;
            // console.log("length is too short"+ su_username);
            fcname = document.getElementById("su_username");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("fname", "*Please enter a valid name!");
            return returnval;
        }

        var su_email = document.forms['myForm']["su_email"].value;

        if (su_email.trim().length > 30) {
            var returnval = false;
            // console.log("length is too short"+ su_name);
            fcname = document.getElementById("su_email");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("femail", "*Length of email is too long");
            return returnval;
        }

        var su_password = document.forms['myForm']["su_password"].value;

        if (su_password.trim().length < 6) {
            var returnval = false;
            // console.log("*Your password is too short!"+ su_name);
            fcname = document.getElementById("su_password");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("fpassword", "*Your password is too short!");
            return returnval;
        }
        else{
            var su_cpassword = document.forms['myForm']["su_cpassword"].value;

            if (su_cpassword!=su_password) {
                var returnval = false;
                // console.log("*Your password is too short!"+ su_name);
                fcname = document.getElementById("su_cpassword");
                fcname.style.borderColor = "red";
                // alert("length of name is short")
                seterror("fcpassword", "*password does not match");
                return returnval;
            }
        }

        var su_phone = document.forms['myForm']["su_phone"].value;

        if (su_phone.length > 10 || su_phone.length < 10) {
            var returnval = false;
            fcname = document.getElementById("su_phone");
            fcname.style.borderColor = "red";
            if(su_phone.length < 10){
                seterror("fphone", "*Length of number is too short");
                return returnval;
            }else{
                seterror("fphone", "*Length of number is too long");
                return returnval;
            }
        }

            return returnval;
        }
</script>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(images/bg-2.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>
                            <form name="myForm" onsubmit="return aniket_my_validate()" action="user-data.php" method="post" class="signin-form">

                                <div class="form-group mb-3" id="fname">
                                    <label class="label" for="name">Enter Username* </label>
                                    <div><sub><span class="formerror"></span></sub>
                                        <input type="text" id="su_username" name="su_username" class="form-control" placeholder="Your name" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3" id="femail">
                                    <label class="label" for="email">Enter E-mail address*</label>
                                    <div><sub><span class="formerror"></span></sub>
                                        <input type="email" id="su_email" name="su_email" class="form-control" placeholder="example@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3" id="fphone">
                                    <label class="label" for="phone">Enter Phone number* </label>
                                    <div><sub><span class="formerror"></span></sub>
                                        <input type="10" id="su_phone" name="su_phone" class="form-control" placeholder="0123456789" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3" id="fpassword">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="label" for="password">set Password </label>
                                        </div>
                                        <div class="col-auto" style="text-align: right !important;">
                                            <input id="show-password" type="checkbox" onclick="myFunction3()" style="accent-color: #6C0000;"> Show password
                                        </div>
                                        <script>
											function myFunction3() {
												var checkBox = document.getElementById("show-password");
												var pword = document.getElementById("su_password");
                                                var cword = document.getElementById("su_cpassword");
												if (checkBox.checked == true){
													pword.type = "text";
                                                    cword.type = "text"
												} else {
													pword.type = "password";
                                                    cword.type = "password";
												}
											}
										</script>
                                    </div> <sub><span class="formerror"></span></sub>
                                    <input type="password" id="su_password" name="su_password" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="form-group mb-3"  id="fcpassword">
                                    <label class="label" for="password">Confirm Password </label> <sub><span class="formerror"></span></sub>
                                    <input type="password" id="su_cpassword" name="su_cpassword" class="form-control" placeholder="Confirm Password" required>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-primary rounded submit px-3" value="Sign-up">
                                    <!-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                        Sign-up
                                    </button> -->
                                </div>

                                <div class="form-group d-md-flex">

                                </div>
                            </form>
                            <p class="text-center">Already a member? <a href="index.php">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>