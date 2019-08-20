<?php
$dataFile = __DIR__ . '/data.txt';
$sendRecord = $_POST['newRecord'] . 'ENDOF' . PHP_EOL;
file_put_contents($dataFile, $sendRecord, FILE_APPEND);
header("Location: index.php");