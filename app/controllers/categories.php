<?php
include(ROOT_PATH . "/app/database/dbqueries.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateCategory.php");


$table = 'Category';

$errors = array();
$id = '';
$name = '';
$description = '';

$categories = selectAll($table);

// add category
if (isset($_POST['add-category'])) {
    $errors = validateCategory($_POST);

    if (count($errors) == 0) {
        unset($_POST['add-category']);

        $category_id = create('Category', $_POST);
        $_SESSION['message'] = 'Category created succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/category/manage_category.php');
        exit();
    } else {
        $name = $_POST['categoryName'];
        $description = $_POST['description'];
    }
}

// fetch category by id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = selectOne($table, ['categoryID' => $id]);
    $id = $category['categoryID'];
    $name = $category['categoryName'];
    $description = $category['description'];
}

// update category
if (isset($_POST['update-category'])) {
    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-category'], $_POST['id']);
        $category_id = update($table, $id, $_POST, 'categoryID');
        $_SESSION['message'] = 'Category updated succesfully';
        $_SESSION['type'] = 'alert alert-success';
        header('Location: ' . BASE_URL . '/views/category/manage_category.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['categoryName'];
        $description = $_POST['description'];
    }
}

// delete category
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id, 'categoryID');
    $_SESSION['message'] = "Category deleted";
    $_SESSION['type'] = 'alert alert-success';
    header('Location: ' . BASE_URL . '/views/category/manage_category.php');
    exit();
}
