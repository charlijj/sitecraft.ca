<?php
    define('USER', 'csci311b');
    define('PASSWORD', 'Hq2w7QRp');
    define('HOST', 'localhost');
    define('DATABASE', 'csci311b_project');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>

<!-- 
 CREATE TABLE Members (
    MemberID int(10) unsigned NOT NULL AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(100) NOT NULL,
    first_name varchar(100) NOT NULL,
    last_name varchar(100) NOT NULL,
    business_name varchar(100) NOT NULL,
    PRIMARY KEY (MemberID),
    UNIQUE KEY username (username)
); 
#include a businessname FK!! -->