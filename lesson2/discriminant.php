<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discriminant</title>
</head>
<body>
    <?php
        $funcDir = __DIR__ . '/functions.php';
        require_once $funcDir;

        showQuadraticSolution( 1, 2, 1);
        showQuadraticSolution( 2, 4, 4);
        showQuadraticSolution( 4, 4, 0);

        '<br>';
        
        echo 'functions.php directory is - <br>' . $funcDir;
    ?>
</body>
</html>