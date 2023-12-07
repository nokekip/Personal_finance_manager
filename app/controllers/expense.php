<?php
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateExpense.php");

$errors = array();

$table = 'Expenditure';
$id = '';
$category_id = '';
$amount = '';
$date = '';
$particulars = '';
$user_id = $_SESSION['UserID'];
$expenses = selectAll($table, ['UserID' => $user_id]);
$categories = selectAll('Category');

// Add expense
if (isset($_POST['add-expense-btn'])) {
    $errors = validateExpense($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-expense-btn']);

        $_POST['UserID'] = $user_id;
        $expense_id = create($table, $_POST);
        $_SESSION['message'] = 'Expense was added succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/expense/manage_expense.php');
        exit();
    } else {
        $category_id = $_POST['categoryID'];
        $particulars = $_POST['particulars'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
    }
}

// Fetch expense by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $expense = selectOne($table, ['expenseID' => $id]);
    $id = $expense['expenseID'];
    $category_id = $expense['categoryID'];
    $particulars = $expense['particulars'];
    $amount = $expense['amount'];
    $date = $expense['date'];
}

// update expense
if (isset($_POST['update-expense-btn'])) {
    $errors = validateExpense($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-expense-btn'], $_POST['id']);
        $expense_id = update($table, $id, $_POST, 'expenseID');
        $_SESSION['message'] = 'Expense was updated successfully';
        $_SESSION['type'] = 'alert alert-success';
        header("location:" . BASE_URL . "/views/expense/manage_expense.php");
    }
}

// delete expense
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $count = delete($table, $id, 'expenseID');
    $_SESSION['message'] = 'Expense was deleted successfully';
    $_SESSION['type'] = 'alert alert-success';
    header("location:" . BASE_URL . "/views/expense/manage_expense.php");
    exit();
}