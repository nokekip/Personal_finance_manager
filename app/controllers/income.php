<?php
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateIncome.php");

$errors = array();

$table = 'Income';
$id = '';
$source = '';
$amount = '';
$date = '';
$details = '';
$user_id = $_SESSION['UserID'];

if (isset($_POST['income-btn'])) {
    $errors = validateIncome($_POST);
    if (count($errors) === 0) {
        unset($_POST['income-btn']);

        $_POST['UserID'] = $user_id;
        $income_id = create($table, $_POST);
        $_SESSION['message'] = 'Income was added succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/income/manage_income.php');
        exit();
    } else {
        $source = $_POST['source'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
        $details = $_POST['details'];
    }
}
