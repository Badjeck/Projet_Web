<?php
$database_host = 'gabrielfbebddcv.mysql.db';
$database_port = '3306';
$database_dbname = 'gabrielfbebddcv';
$database_user = 'gabrielfbebddcv';
$database_password = 'Mabetty33';
$database_charset = 'UTF8';
$database_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO(
    'mysql:host=' . $database_host .
    ';port=' . $database_port .
    ';dbname=' . $database_dbname .
    ';charset=' . $database_charset,
    $database_user,
    $database_password,
    $database_options
);
?>
