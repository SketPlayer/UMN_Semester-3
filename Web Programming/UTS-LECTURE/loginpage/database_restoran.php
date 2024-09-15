<?php

define('DSN', 'mysql:host=localhost;dbname=db_restoran_if330');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);

// Create database jika tidak ada
$db = new PDO('mysql:host=localhost', DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE DATABASE IF NOT EXISTS db_restoran_if330";

if ($db->exec($sql) !== false) {
    echo "Database created successfully";
} else {
    die("Error creating database: " . print_r($db->errorInfo(), true));
}

// Create table user jika tidak ada
$db = new PDO(DSN, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30),
    birth_date DATE NOT NULL,
    gender VARCHAR(15) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    role VARCHAR(5) NOT NULL DEFAULT 'user'
)engine=InnoDB";

if ($db->exec($sql) !== false) {
    echo "Table created successfully";
} else {
    die("Error creating table: " . print_r($db->errorInfo(), true));
}
?>