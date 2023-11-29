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
$all_income = selectAll($table, ['UserID' => $user_id]);

// add income
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

// fetch income by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $income = selectOne($table, ['IncomeID' => $id]);
    $id = $income['IncomeID'];
    $source = $income['source'];
    $amount = $income['amount'];
    $date = $income['date'];
    $details = $income['details'];
}

// update income
if (isset($_POST['update-income-btn'])) {
    $errors = validateIncome($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-income-btn'], $_POST['id']);
        $income_id = update($table, $id, $_POST, 'IncomeID');
        $_SESSION['message'] = 'Income was updated succesfully';
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

// delete income
if (isset($_GET['del_income'])) {
    $id = $_GET['del_income'];
    $count = delete($table, $id, 'IncomeID');
    $_SESSION['message'] = "Income deleted succesfully";
    $_SESSION['type'] = 'alert alert-success';
    header('Location: ' . BASE_URL . '/views/income/manage_income.php');
    exit();
}