<?php
session_start();
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/Classes/UsersList.php';
$userList = new UsersList();
if (isset($_POST['login']) && isset($_POST['password'])){
    if ($userList->existsUser($_POST['login'])){
        if ($userList->checkPassword($_POST['login'], $_POST['password'])){
            $_SESSION['user'] = $_POST['login'];
            $currentUser = $userList->getCurrentUser();
            //echo $currentUser;
            if ($currentUser){
                makeRecordInLog($currentUser, 'login');
                header('location: ./');
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login failed</title>
</head>
<body>
    <h2>Login failed</h2>
    <p>Login failed, please login again</p>
    <a href="./login.php">Login page</a>
</body>
</html>
