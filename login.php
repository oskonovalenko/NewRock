<?php

session_start();
require 'auth.php';
require 'subscription.php';
// Авторизуємо користувача, якщо в запиті є логін і пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sign in</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="vh-100">
<?php if (isAuthorized()): ?>
    <?php require 'admin.php' ?>
<?php else: ?>
    <?php require 'login.php' ?>
<?php endif; ?>
