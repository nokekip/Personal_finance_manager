<?php

include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = '';
$name = '';
$email = '';
$phone = '';
$password = '';
$confPassword = '';

// func for session login
function loginUser($user) {
    $_SESSION['UserID'] = $user['UserID'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['message'] = 'You are are now logged in';
    $_SESSION['type'] = 'alert alert-success';

    header('location: ' . BASE_URL . '/index.php');
    exit();
}

if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['confpassword']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('Users', $_POST);
        $user = selectOne('Users', ['UserID' => $user_id]);
        // login user
        loginUser($user);
    } else {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confPassword = $_POST['confpassword'];
    }
}
