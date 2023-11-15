<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
<style></style>
<script src="script.js"></script>
</head>
<body>
    <div id="registr-form">
        <div id="reg">
            <h2>Регистрация</h2>


                
            <style>
                #error{
                    color: red;
                    font-size: 12px;
                    margin-top: -27px;
                }
            </style>
        <form action="/src/actions/register.php" method="POST">
            <input name="login" class="reg-item inputs" type="text" placeholder="Email/Login" aria-invalid="true" aria-describedby="error" required>
            <input name="password" class="reg-item inputs" type="password" placeholder="Password" required>
            <input name="repeat-password" class="reg-item inputs" type="password" placeholder="Repeat password" required>
            <div id="personal-data">
            <b> <input id="check-1" type="checkbox" class="hide" name="personal_data"></b>
            <p id="soglas">Согласен с условиями обработки персональных данных</p>
            </div>

            <button class="reg-item button123" type="submit" id="submit-button">Регистрация</button>
            
        </form>
                
        <div id="to-login">
        Уже есть аккаунт? <a href="login-user.php">Войти</a>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="301" height="4" viewBox="0 0 301 4" fill="none">
            <path d="M2 2H299" stroke="white" stroke-width="4" stroke-linecap="round"/>
            </svg>
        <div id="logo-social">
        <img class="form-images" src="images/github-mark.png" alt="">
        <img class="form-images"src="images/vk-social-logotype-svgrepo-com.svg" alt="">
        </div>
        </div>
        </div>
    
    </div>
</body>
</html>


