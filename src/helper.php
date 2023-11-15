<?php
    session_start();
    function redirect(string $path){
        header("Location: $path");
        die();
    }


    function setMessage(string $key, string $message): void
    {
        $_SESSION['message'][$key] = $message;
    }
    function getMessage(string $key): string
    {
        $message = $_SESSION['message'][$key] ?? '';
        unset($_SESSION['message'][$key]);
        return $message;
    }
    function hasMessage(string $key): bool
    {
        return isset($_SESSION['message'][$key]);
    }
    function logout()
    {
        unset($_SESSION['user']);
    }
?>