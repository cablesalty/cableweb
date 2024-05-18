<?php
session_start();

if (!isset($_SESSION['loggedin']) || !$_SESSION["loggedin"] === true) {
    die("Unauthorized access!");
}

$title = $_POST['title'];
$content = $_POST['content'];

$myfile = fopen("../posts/postf.php", "a") or die("Unable to open file!");

$txt = "<div class='post'>\n<h1>$title</h1><br>\n$content\n</div>";
fwrite($myfile, $txt);

fclose($myfile);

header("Location: /");