<?php
const host = '127.0.0.1';
const port = '3306';
const database = 'dvorec';
const user = 'root';
const password = 'root';

// $link = mysqli_connect(host, user, password, database) or die(mysqli_error($link));

function getPDO() :  PDO
{   
    try {
    return $pdo = new \PDO('mysql:host=' . host . ';port='. port .';charset=utf8;dbname='. database, user, password);
    } catch (\PDOException $e) {
        die(''. $e->getMessage());}
}




?> 