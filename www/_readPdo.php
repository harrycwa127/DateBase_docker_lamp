<?php

// connect to read database config
$dbhost    = 'db';
$dbname    = 'myDb';
$dbuser    = 'read_data';
$dbpassword  = 'password';

try {
    $read_db = new PDO(
        "mysql:host={$dbhost};dbname={$dbname};",
        $dbuser, $dbpassword);
    $read_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $read_db;

} catch(Exception $e) {
    error_log('Connection failed: ' . $e->getMessage());
}
?>