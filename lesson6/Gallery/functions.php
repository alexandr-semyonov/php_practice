<?php

function makeRecordInLog($currentUser, $message, $file = ''){
    $pathToLog = __DIR__ . '/log.txt';
    switch ($message){
        case 'login': $message = ' Login'; break;
        case 'logout': $message = ' Logout'; break;
        case 'upload': $message = ' Uploaded image - ' . $file; break;
        case 'uploadfail': $message = ' Fail to upload file - ' . $file;break;
    }
    $data = date("Y-m-d H:i:s") . ' ' . $currentUser . $message . PHP_EOL;
    $fileHandler = fopen($pathToLog, 'a');
    fwrite($fileHandler, $data);
    fclose($fileHandler);
    return $data;
}