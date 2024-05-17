<?php
    $LOGINURL = "https://cablesalty.com/cpanel/login.php";
    //$LOGINURL = "http://0.0.0.0:8080/cpanel/login.php";    

    session_start();

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        echo "You are logged in.";
    } else {
        echo "You are not logged in. Redirecting...";
        header("Location: " . $LOGINURL);
        die();
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
    
</body>
</html>