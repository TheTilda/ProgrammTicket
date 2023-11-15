<?php

session_start();

require_once __DIR__ .'/../../bd.php';
require_once __DIR__ ."/../helper.php";

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

$pdo = getPDO();

 $stmt = $pdo -> prepare('SELECT * FROM users WHERE `login` = :login');
 $stmt->execute(['login' => $login]);
 $user = $stmt ->fetch(PDO::FETCH_ASSOC);

 if (!$user){
    setMessage('error','Логин/Пароль не подходят');
    redirect('/login-user.php');
 }else if (!password_verify($password, $user['password']))
 {
    setMessage('error','Логин/Пароль не подходят');
    redirect('/login-user.php');
 }else{
    $_SESSION['user'] = $user;
    redirect('/');
 }
 
 redirect('/login-user.php');

?>