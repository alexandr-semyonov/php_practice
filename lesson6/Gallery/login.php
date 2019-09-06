<?php
session_start();
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/Classes/UsersList.php';
$userList = new UsersList();
$currentUser = $userList->getCurrentUser();
if ($currentUser){
    header('location: ./');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="./">Home page</a>
    <br>
    <br>
    <div>
    <form action="./loginfailed.php" method="post">
        <label>
        Enter login
            <br>
        <input type="text" name="login">
            <br>
        </label>
        <label>
        Enter password
            <br>
        <input type="password" name="password">
            <br>
        </label>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>