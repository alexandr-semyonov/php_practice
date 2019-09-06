<?php
session_start();
require_once __DIR__ . '/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery with login and upload</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h2>Hello <?php
        $userName = $_SESSION['user'] ?? ' stranger';
        echo $userName;
        ?>
    !</h2>
    <?php
        if(!isset($_SESSION['user'])){
            echo '<p>If you want to upload images please <a href="login.php">Login</a></p>';
        } else {
            echo '<a href="./exit.php">Logout</a>';
        }
    ?>
    <h1>Gallery with upload</h1>
    <ul class="gallery">
        <?php
        $imageLinks = scandir( __DIR__ . '/img' );
        foreach ($imageLinks as $link) {
            if ($link !== '.' && $link !== '..'){
                echo '<li><img alt = "' . $link . '" src="img/' .  $link . '"></li>';
            }
        }
        ?>
    </ul>
    <?php
    if(isset($_SESSION['user'])){
        echo
    '<form
            action="upload.php"
            method="post"
            enctype="multipart/form-data"
    >
        <input type="file" name="myimg">
        <button type="submit">Send image</button>
    </form>';
    }
    ?>
</body>
</html>
