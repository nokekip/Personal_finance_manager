<?php

// check if session is created
function usersOnly($redirect = '/login.php')
{
    if (empty($_SESSION['UserID'])) {
        $_SESSION['message'] = 'You need to log in first!';
        $_SESSION['type'] = 'alert alert-danger';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}
