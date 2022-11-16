<?php

// connect to database config
$dbhost    = 'db';
$dbname    = 'myDb';
$dbuser    = 'root';
$dbpassword  = 'test';

try {
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    return $conn;

} catch(Exception $e) {
    error_log('Connection failed: ' . $e->getMessage());
}
?>