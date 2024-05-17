<?php
    $PAGEURL = "https://cablesalty.com/cpanel/index.php";
    //$PAGEURL = "http://0.0.0.0:8080/cpanel/index.php";

    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] === true) {
        echo "You are already logged in!, redirecting...";
        header("Location: " . $PAGEURL);
        die();
    } else {
        echo "You are not logged in.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cablesalty cPanel</title>
</head>
<body>
    <form action="/cpanel/validate.php" method="post">
        <label for="password">You need a password to access cPanel</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>