<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/main.css">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <title>cablesalty // Server info</title>
</head>
<body>
    <div class="header">
        <h1 class="title">cablesalty</h1>
        <h2 class="subtitle">some information</h2>
        <div class="navbar">
            <a href="/">Go back</a>
            <a href="https://github.com/cablesalty">Github</a>
            <a href="">Discord</a>
            <a href="https://github.com/cablesalty/cableweb">View source code</a>
        </div>
    </div>

    <br>
    <div class="center">
        <h1 class="title">Server info</h1>
        <br>
        <p>
            This site is running on a <a href="https://www.raspberrypi.com/products/raspberry-pi-4-model-b/">Raspberry Pi 4</a>
            with 8gb of ram enclosed in an <a href="https://argon40.com/products/argon-neo-case-for-raspberry-pi-4">Argon Neo</a>
            passive cooling case.<br>

            The site is <a href="https://www.php.net/">written in php</a> and uses <a href="https://httpd.apache.org/">Apache2</a>.<br>
            <br>

            But the Pi also runs <a href="https://www.home-assistant.io/">Home Assistant</a> to run my smart home
            (or to be more specific, smart room) alongside this site.<br>
            <br>
            It's a pretty basic setup. Nothing too fancy.<br>
            However the server might move to a new <a href="https://react.dev/">React</a>
            frontend with a <a href="https://nodejs.org/en">nodejs</a> (<a href="https://expressjs.com/">express</a>) backend.<br>
            <br>

            <?php
                echo "Server is running on user: " . get_current_user();
            ?>
        </p>
    </div>
</body>
</html>