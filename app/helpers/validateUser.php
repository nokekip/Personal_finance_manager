<?php

// validate register form to make sure required fields are filled
function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['name'])) {
        array_push($errors, 'Your name is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }
    if (empty($user['phone'])) {
        array_push($errors, 'Phone Number is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
    if (empty($user['confpassword'])) {
        array_push($errors, 'Confirm Password is required');
    }
    if ($user['password'] !== $user['confpassword']) {
        array_push($errors, 'Password does not match');
    }

    $existingUser = selectOne('Users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exist!');
    }

    return $errors;
}

// validate login form
function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
    return $errors;
}
