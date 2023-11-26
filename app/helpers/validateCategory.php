<?php

function validateCategory($category)
{
    $errors = array();

    if (empty($category['categoryName'])) {
        array_push($errors, 'Category name is required');
    }
  

    $existingCategory = selectOne('Category', ['categoryName' => $category['categoryName']]);
    if ($existingCategory) {
        array_push($errors, 'Category already exist!');
    }

    return $errors;
}
