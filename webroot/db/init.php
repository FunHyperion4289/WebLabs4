<?php
require_once("./funcs/functions.php");

$db = getDbConnection();

$query = 'CREATE TABLE IF NOT EXISTS `articles` (
    `id` INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `title` TEXT NOT NULL,
    `category` TEXT NOT NULL,
    `content` TEXT NOT NULL,
    `author` TEXT NOT NULL,
    `created` datetime NOT NULL,
    `image` TEXT NOT NULL
    );';
$db->exec($query);


