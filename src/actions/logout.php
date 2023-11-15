<?php
require_once __DIR__ . '/../helper.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    logout();
    redirect('/login-user.php');
}
redirect('/');
?>