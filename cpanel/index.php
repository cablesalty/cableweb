<?php
    //$LOGINURL = "https://cablesalty.com/cpanel/login.php";
    //$LOGINURL = "http://0.0.0.0:8080/cpanel/login.php";
    $LOGINURL = "/cpanel/login.php";

    session_start();

    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true) {
        echo "You are not logged in. Redirecting...";
        header("Location: $LOGINURL");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/cpanel.css">
    <title>cablesalty cPanel</title>
</head>
<body>
    <h1 class="sectitle">Blog post</h1>
    <hr>
    <form action="postannouncement.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" value="N/A"><br>
        <br>
        <label for="content">Body (contents)</label><br>
        <textarea style="width: 95%;" name="content" id="content" rows="30"><p>No content given.</p></textarea><br>
        <input type="submit" value="POST">
    </form>
    

    <script>
        const body = document.getElementById("body");
    </script>
</body>
</html>