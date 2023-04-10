<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container mx-4 my-4">
        <form action="validate.php" method="post">
            <div class="row px-1 py-1 col-lg-4">
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="row px-1 py-1 col-lg-4">
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter password" required>
            </div>

            <div class="row px-1 py-1 col-lg-4">
                <input class="btn btn-outline-primary" type="submit" value="Login">
            </div>
        </form>

        <div class="row px-1 py-1 col-lg-4">
            New user?<a href="register.php">Create account</a>
        </div>
    </div>
</body>
</html>