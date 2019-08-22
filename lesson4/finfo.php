<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finfo</title>
</head>
<body>
    <?php
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $info = finfo_file($finfo ,__DIR__ . '/1000.jpg');
        echo $info;
        finfo_close($finfo);
        echo '<br>';
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $info = finfo_file($finfo ,__DIR__ . '/screen.png');
        echo $info;
        finfo_close($finfo);
        echo '<br>';
        echo $info;
    ?>
</body>
</html>