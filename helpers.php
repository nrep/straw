<?php
function startsWith ($string, $startString) {
	$len = strlen($startString); 
	return (substr($string, 0, $len) === $startString); 
}

function fetchNow($field, $table, $conditions) {
    include "connection.php";
    
    $sql = "SELECT $field FROM $table WHERE $conditions";
    $result = $connection->query($sql);
	
    $row = $result->fetch_assoc();
    $answer = $row[$field];

    return $answer;
}

function setNow($table, $fields, $conditions) {
    include "connection.php";
    $sql = "UPDATE $table SET $fields WHERE $conditions";
    return $connection->query($sql);
}

function getLast ($column, $table) {
    include "connection.php";
    
    $sql = "SELECT $column FROM $table ORDER BY $column DESC LIMIT 1";
    $result = $connection->query($sql);
	
    $row = $result->fetch_assoc();
    $answer = $row[$column];

    return $answer;
}
?>