<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("session.php");
    echo $_SESSION['email'];
    ?>

<div>
<a href="logout.php">logout</a>
</div>
</body>
</html>