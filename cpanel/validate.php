<?php
//$PAGEURL = "https://cablesalty.com/cpanel/index.php";
//$PAGEURL = "http://0.0.0.0:8080/cpanel/index.php";
$PAGEURL = "/cpanel/index.php";

session_start();

// Check the hardcoded passwd
if ($_POST["password"] === "admin") { //! Security advisory: for the love of god, change it
    $_SESSION["loggedin"] = true;
    echo "Welcome, admin!";
    header("Location: $PAGEURL");
} else {
    echo "WRONG PASSWORD! This action is recorded!";
}

die();