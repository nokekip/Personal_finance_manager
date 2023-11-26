<?php

include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = '';
$name = '';
$email = '';
$phone = '';
$password = '';
$confPassword = '';

$table = 'Users';

// func for session login
function loginUser($user)
{
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
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['UserID' => $user_id]);
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

// login validation
if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    // check if no errors
    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'Invalid username or password');

            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    }
}
