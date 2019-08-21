<?php

$fileName = 'Image(copy-2).jpeg';
if ( strstr($fileName, '(copy)') ){
    $fileName = explode('.', $fileName);
    $fileNameArr = explode('(copy)',$fileName[0]);
    $fileNameArr[1] = 2;
    $fileName[0] = implode('(copy-', $fileNameArr) . ')';
    $fileName = implode('.',$fileName);
}
if ( strstr($fileName, '(copy-') ){
    $fileName = explode('.', $fileName);
    $fileNameArr = explode('(copy-',$fileName[0]);
    $fileNameArr[1] = intval (mb_substr($fileNameArr[1], 0, 1));
    $i = $fileNameArr[1];
    $fileNameArr[1] = $i + 1;
    $fileName[0] = implode('(copy-', $fileNameArr) . ')';
    $fileName = implode('.',$fileName);
}

/*
} else {
    $i = $fileNameArr[1];
    $fileNameArr[1] = $i + 1;
};*/



echo $fileName;
//echo '<br>';