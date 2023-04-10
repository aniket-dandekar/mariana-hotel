<!doctype html>
<html lang="en">

<head>
	<title>Mariana Hotel | Forgot Password</title>

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
            document.getElementById("fp_email").style.borderColor = "#ced4da";
        }
    }

    function seterror(id, error) {
        //sets error infpde tag of id 
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }

    function aniket_my_validate() {
        var returnval = true;
        clearErrors();

        var fp_email = document.forms['myForm']["fp_email"].value;

        if (fp_email.trim().length > 30) {
            var returnval = false;
            // console.log("length is too short"+ fp_name);
            fcname = document.getElementById("fp_email");
            fcname.style.borderColor = "red";
            // alert("length of name is short")
            seterror("femail", "*invalid email, email too long");
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
									<h3 class="mb-4">Forgot password?</h3>
								</div>
							</div>
							<form name="myForm" onsubmit="return aniket_my_validate()" action="user-data.php" method="post" class="signin-form">
								<div class="form-group mb-3" id="femail">
									<div>
										<label class="label" for="email">Enter your E-mail address</label>
									</div><sub><span class="formerror"></span></sub>
									<input id="fp_email" name="fp_email" type="email" class="form-control" placeholder="E-mail id" required>
								</div>
								<!-- <?php // if(isset($_SESSION['email'])){ ?>
								<div class="form-group mb-3" id="fotp">
									<label class="label" for="otp">Enter otp</label>
									<input id="fp_otp" name="fp_otp" type="number" class="form-control" placeholder="Password" required>
								</div>
								<?php // } ?> -->
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">
										Send password
									</button>
								</div>
								<div class="form-group d-md-flex">
									
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