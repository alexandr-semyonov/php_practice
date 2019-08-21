<?php
if ( isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error']) {
        $uploadFile = $_FILES['myimg']['name'];
        $fileName = $uploadFile;

        if (file_exists( __DIR__ . '/img' . '/' . $fileName )){
            $fileName = explode('.',$fileName);
            $fileName[0] = $fileName[0] . 'x' .rand(0, 999);
            $fileName = implode('.', $fileName);
        }
        move_uploaded_file(
        $_FILES['myimg']['tmp_name'],
        __DIR__ . '/img' . '/' . $fileName
        );
    }
}

header('location:index.php');