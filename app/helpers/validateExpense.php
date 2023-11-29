<?php

// validate expense form to make sure required fields are filled
function validateExpense($expense)
{
    $errors = array();

    if (empty($expense['categoryID'])) {
        array_push($errors, 'Please Select a category');
    }
    if (empty($expense['amount'])) {
        array_push($errors, 'Amount is required');
    }
    if (empty($expense['date'])) {
        array_push($errors, 'Date is required');
    }
    if (empty($expense['particulars'])) {
        array_push($errors, 'Particulars is required');
    }

    return $errors;
}