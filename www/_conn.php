<?php

// connect to database config
$dbhost    = 'db';
$dbname    = 'myDb';
$dbuser    = 'read_data';
$dbpassword  = 'password';

try {
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    return $conn;

} catch(Exception $e) {
    error_log('Connection failed: ' . $e->getMessage());
}
?>