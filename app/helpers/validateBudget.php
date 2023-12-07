<?php

// check if all input have been entered before manipultion
function validateBudget($budget) {
    $errors = array();

    if (empty($budget['categoryID'])) {
        array_push($errors, 'Please select category');
    }
    if (empty($budget['amount'])) {
        array_push($errors, 'Amount is required');
    }
    if (empty($budget['allocationDate'])) {
        array_push($errors, 'Enter allocation date');
    }

    return $errors;
}