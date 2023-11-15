<?php 
session_start();
require_once __DIR__ . "/..//../bd.php";
require_once __DIR__ . '/../helper.php';

$login = $_POST['login'];
$password = $_POST['password'];
$repeat_passsword = $_POST['repeat-passsword'];

$_SESSION['location']['name'] = '';
//Validation
// $_SESSION['validation']['name'] = 'Неверное имя' ;

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO users (login, password, level) VALUES (:login, :password, :level)";
$params = [
    "login" => $login,
     "password" => password_hash($password, PASSWORD_DEFAULT),
     "level" => '1'
];


$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
    // $stms -> commit();
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/');