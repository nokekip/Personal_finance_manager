<?php
include("path.php");

session_start();

$_SESSION['UserID'] = $user['UserID'];
$_SESSION['username'] = $user['username'];
$_SESSION['message'] = 'You are are now logged in';
$_SESSION['type'] = 'alert alert-success';
session_destroy();

header('location: ' . BASE_URL . '/login.php');