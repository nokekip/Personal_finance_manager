<?php
include(ROOT_PATH . "/app/database/dbqueries.php");

$table = 'Category';

$id = '';
$name = '';
$description = '';

$categories = selectAll($table);

// add category
if (isset($_POST['add-category'])) {
    unset($_POST['add-category']);

    $category_id = create('Category', $_POST);
    $_SESSION['message'] = 'Category created succesfully';
    $_SESSION['type'] = 'alert alert-success';
    header('Location: ' . BASE_URL . '/views/category/manage_category.php');
    exit();
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
    $id = $_POST['id'];
    unset($_POST['update-category'], $_POST['id']);
    $category_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Category updated succesfully';
    $_SESSION['type'] = 'alert alert-success';
    header('Location: ' . BASE_URL . '/views/category/manage_category.php');
    exit();
}