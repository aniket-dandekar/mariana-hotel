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

<script>
    function clearErrors() {
        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
            document.getElementById("si_email").style.borderColor = "#ced4da";
            document.getElementById("si_password").style.borderColor = "#ced4da";
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

        var si_email = document.forms['myForm']["si_email"].value;

        if (si_email.trim().length > 30) {
            var returnval = false;
            // console.log("length is too short"+ si_name);
            fcname = document.getElementById("si_email");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("femail", "*Length of email is too long");
            return returnval;
        }

        var si_password = document.forms['myForm']["si_password"].value;

        if (si_password.trim().length < 6) {
            var returnval = false;
            // console.log("*Your password is too short!"+ si_name);
            fcname = document.getElementById("si_password");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("fpassword", "*Your password is too short!");
            return returnval;
        }
        return returnval;
    }
</script>

</head>

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
									<h3 class="mb-4">Please Sign In to continue</h3>
								</div>
							</div>
							<form name="myForm" onsubmit="return aniket_my_validate()" action="user-data.php" method="post" class="signin-form">

								<div class="form-group mb-3" id="femail">
									<label class="label" for="si_email">E-mail address</label>
									<sub><span class="formerror"></span></sub>
									<input type="text" id="si_email" name="si_email" class="form-control" placeholder="E-mail address" required>
								</div>

								<div class="form-group mb-3" id="fpassword">
									<div class="row">
                                        <div class="col-auto">
                                            <label class="label" for="password">Password </label>
                                        </div>
                                        <div class="col-auto" style="text-align: right !important;">
                                            <input id="show-password" type="checkbox" onclick="myFunction3()" style="accent-color: #6C0000;"> Show password
                                        </div>
										<script>
											function myFunction3() {
												var checkBox = document.getElementById("show-password");
												var pword = document.getElementById("si_password");
												if (checkBox.checked == true){
													pword.type = "text";
												} else {
													pword.type = "password";
												}
											}
										</script>
                                    </div><sub><span class="formerror"></span></sub>
									<input type="password" id="si_password" name="si_password" class="form-control" placeholder="Password" required>
								</div>

								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">
										Sign In
									</button>
								</div>

								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										
									</div>
									<div class="w-50 text-md-right">
										<a style="color: #6C0000;" href="forgot-password.php">Forgot Password?</a>
									</div>
								</div>
							</form>
							<p class="text-center">Not a member? <a href="sign-up.php">Sign Up</a></p>
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