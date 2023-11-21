<?php

require('connect.php');

// to be removed only for printing 
function pt($value) {
    echo "<pre>", print_r($value, true);
    die();
}

// Executes query Takes in sql query with optional data binding
function executeQuery($sql, $data) {
    global $conn;

    // prepare sql statement
    $stmt = $conn->prepare($sql);

    if($data) {
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
    }

    // execute prepared statement
    $stmt->execute();

    return $stmt;
}

// Function to retrieve all column

function selectAll($table, $conditions = []) {
    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // returns records that matches conditions
        $i = 0;
        foreach($conditions as $key => $value) {
            if($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    
}
$col = ['categoryID'=> 1];
$res = selectAll('Category', $col);
pt($res);