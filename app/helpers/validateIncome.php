<?php

// validate income form to make sure required fields are filled
function validateIncome($income)
{
    $errors = array();

    if (empty($income['source'])) {
        array_push($errors, 'Source is required');
    }
    if (empty($income['amount'])) {
        array_push($errors, 'Amount is required');
    }
    if (empty($income['date'])) {
        array_push($errors, 'Date is required');
    }
    if (empty($income['details'])) {
        array_push($errors, 'Details is required');
    }

    return $errors;
}