<?php
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateBudget.php");

$errors = array();

$table = 'Budget';
$id = '';
$amount = '';
$date = '';
$category_id = '';
$user_id = $_SESSION['UserID'];
$categories = selectAll('Category');
$budgets = selectAll($table, ['UserID' => $user_id]);

// add budget
if (isset($_POST['add-budget-btn'])) {
    $errors = validateBudget($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-budget-btn']);

        $_POST['UserID'] = $user_id;
        $budget_id = create($table, $_POST);
        $_SESSION['message'] = 'Budget was created succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/budget/manage_budget.php');
        exit();
    } else {
        $category_id = $_POST['categoryID'];
        $amount = $_POST['amount'];
        $date = $_POST['allocationDate'];
    }
}

// fetch budget by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $budget = selectOne($table, ['budgetID' => $id]);
    $id = $budget['budgetID'];
    $category_id = $budget['categoryID'];
    $amount = $budget['amount'];
    $date = $budget['allocationDate'];
}

// update budget
if (isset($_POST['update-budget-btn'])) {
    $errors = validateBudget($_POST);
    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['id'], $_POST['update-budget-btn']);
        $budget_id = update($table, $id, $_POST, 'budgetID');
        $_SESSION['message'] = 'Budget was updated succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/budget/manage_budget.php');
        exit();
    }
}

// delete budget
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $count = delete($table, $id, 'budgetID');
    $_SESSION['message'] = 'Budget was deleted succesfully';
    $_SESSION['type'] = 'alert alert-success';
    header('Location: ' . BASE_URL . '/views/budget/manage_budget.php');
    exit();
}
