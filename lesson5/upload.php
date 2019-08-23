<?php
session_start();
require_once __DIR__ . '/functions.php';
$currentUser = getCurrentUser();
if ($currentUser){
    if ( isset($_FILES['myimg']) ) {
        if (0 == $_FILES['myimg']['error']) {
            $uploadedFile = $_FILES['myimg']['tmp_name'];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $info = finfo_file($finfo , $uploadedFile);
            finfo_close($finfo);
            if ('image/jpeg' == $info || 'image/png' == $info ){
                $fileName = $_FILES['myimg']['name'];
                if (file_exists( __DIR__ . '/img' . '/' . $fileName )){
                    $fileName = explode('.',$fileName);
                    $fileName[0] = $fileName[0] . 'x' .rand(0, 999);
                    $fileName = implode('.', $fileName);
                }
                move_uploaded_file(
                    $_FILES['myimg']['tmp_name'],
                    __DIR__ . '/img' . '/' . $fileName
                );
                makeRecordInLog($currentUser, 'upload', $fileName);
            } else {
                makeRecordInLog($currentUser, 'uploadfail', $info);
                exit (
                '<h2>Invalid file format. Use JPEG or PNG.</h2>
                <br>
                <a href="index.php">Back to gallery</a>');
            }
        }
    }
    header('location:index.php');
} else {
    echo '<p>If you want to upload images please <a href="login.php">Login</a></p>';
}
