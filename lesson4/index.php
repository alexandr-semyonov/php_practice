<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File operaions</title>
</head>
<body>
  <h1>Hello</h1>
  <?php

    $path = __DIR__ . '/data.txt';
    $fh = fopen($path, 'w');
    fwrite($fh, 'Hello world!');
    fclose($fh);

  ?>
</body>
</html>