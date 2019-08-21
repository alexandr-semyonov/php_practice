<?php

if ( isset($_FILES['myimg']) ) {
    if (0 == $_FILES['myimg']['error']) {
        $fileName = $_FILES['myimg']['name'];
        $arrOfNames = scandir( __DIR__ . '/img' );
        


        if (
            in_array($_FILES['myimg']['name'], $arrOfNames)
            &&
            strstr($_FILES['myimg']['name'], '(copy)')
            ){
            $fileName = explode('.', $fileName);
            $fileNameArr = explode('(copy)',$fileName[0]);
            $fileNameArr[1] = 2;
            $fileName[0] = implode('(copy-', $fileNameArr) . ')';
            $fileName = implode('.',$fileName);
        }    
        
        if (in_array($_FILES['myimg']['name'], $arrOfNames)){
            $fileName = explode('.', $fileName);
            $fileName[0] = $fileName[0] . '(copy)';
            $fileName = implode('.', $fileName);
        }    

        move_uploaded_file(
        $_FILES['myimg']['tmp_name'],
        __DIR__ . '/img' . '/' . $fileName
        );
        echo $_FILES['myimg']['name'];
    }
}