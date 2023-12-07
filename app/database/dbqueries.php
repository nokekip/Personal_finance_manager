<?php

session_start();
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

// Selects one row
function selectOne($table, $conditions) {
    global $conn;

    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value){
        if($i === 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

// insert a new record into table
function create($table, $data) {
    global $conn;

    // insert into table variable and set the values for the respective columns dynamically
    $sql = "INSERT INTO $table SET ";
    $i = 0;

    foreach($data as $key => $value) {
        if($i === 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

// update table
function update($table, $id, $data, $idColumn)
{
    global $conn;

    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }

    $sql = $sql . " WHERE $idColumn=?";
    $data['id'] = $id;

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $stmt->affected_rows;
}

// delete function

function delete($table, $id, $idColumn)
{
    global $conn;

    $sql = "DELETE FROM $table WHERE $idColumn=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

// fetch category name from categoryID
function getCategoryName($categoryID) {
    $category = selectOne('Category', ['categoryID' => $categoryID]);
    return $category['categoryName'];
}

// calculate total
function calcTotal($table, $id) {
    global $conn;

    $sql = "SELECT SUM(amount) AS total_amount FROM $table WHERE UserID=?;";
    $result = executeQuery($sql, ['User' => $id]);
    $total = $result->get_result()->fetch_assoc();
    return $total['total_amount'];
}
