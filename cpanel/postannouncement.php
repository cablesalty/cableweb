<?php
session_start();

if (!isset($_SESSION['loggedin']) || !$_SESSION["loggedin"] === true) {
    die("Unauthorized access!");
}

$title = $_POST['title'];
$content = $_POST['content'];

$filedata = fopen("../posts/postf.php", "r") or die("Unable to open file!");
$filed = fread($filedata, filesize("../posts/postf.php"));
fclose($filedata);

$myfile = fopen("../posts/postf.php", "w") or die("Unable to open file!");

$txt = "<div class='post'>\n<h1>$title</h1><br>\n$content\n</div>\n$filed";
fwrite($myfile, $txt);

fclose($myfile);

header("Location: /");