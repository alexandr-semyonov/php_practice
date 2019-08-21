<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery with upload</title>
    <style>
        ul{
            margin: 0;
            padding: 0;
        }
        .gallery li{
            display: inline-block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Gallery with upload</h1>
    <ul class="gallery">
    <?php
        $imageLinks = scandir( __DIR__ . '/img' );
        foreach ($imageLinks as $link) {
            if ($link !== '.' && $link !== '..'){
                echo '<li><img src="img/' .  $link . '"></li>';
            }
        }
    ?>
    </ul>
    <form 
    action="upload.php"    
    method="post"
    enctype="multipart/form-data"
    >
    <input type="file" name="myimg">
    <button type="submit">Send image</button>
    </form>
</body>
</html>