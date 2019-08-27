<?php
    require_once __DIR__ . '/Classes/GuestBook.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM</title>
</head>
<body>
<?php
    $guestBook = new GuestBook();
?>
    <ul>
        <?php
            foreach ($guestBook->getRecords() as $record){ ?>
                <li>
                <?php echo $record->getMessage(); ?>
                    <hr>
                </li>
            <?php }
        ?>
    </ul>
    <form action="./append.php" method="post">
        <textarea name="message"></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>