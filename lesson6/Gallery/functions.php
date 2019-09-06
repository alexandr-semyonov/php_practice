<?php
/*
function getUsersList(){
    $usersList = file(__DIR__ . '/users.txt');
    $usersArr = [];
    foreach ($usersList as $user){
        $line = (explode(':', $user));
        $line[1] = str_replace("\r\n", "", $line[1]);
        $usersArr[$line[0]] = $line[1];
    }
    return $usersArr;
}

function existsUser($login){
    return array_key_exists($login, getUsersList());
}


function checkPassword($login, $password){
    $users = getUsersList();
    return password_verify($password, $users[$login]);
}*/
/*
function getCurrentUser(){
    if (isset($_SESSION['user'])){
            $currentUser = $_SESSION['user'];
            return $currentUser;
    }
    return null;
}*/

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
