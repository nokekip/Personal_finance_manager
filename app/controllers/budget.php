<?php
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateBudget.php");

$errors = array();

$table = 'Budget';
$amount = '';
$date = '';
$category_id = '';
$user_id = $_SESSION['UserID'];
$categories = selectAll('Category');

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
