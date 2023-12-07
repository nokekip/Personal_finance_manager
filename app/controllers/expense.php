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

    if (count($errors) ===0 ){
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
