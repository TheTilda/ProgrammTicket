<?
require_once __DIR__ . '/src/helper.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="registr-form">
        <div id="reg">
            <h2>Войти</h2>
        <form action="/src/actions/login.php" method="POST">
            <?php if(hasMessage("error")): ?>
            <span><?php echo getMessage('error')?></span>
            <?php endif; ?>
            <input name="login" class="reg-item inputs" type="text" placeholder="Email/Login">
            <input name="password" class="reg-item inputs" type="text" placeholder="Password">
            <button class="reg-item button" type="submit">Войти</button>
        </form>
        <div id="to-login">
        Нет аккаунта? <a href="registr.php">Создать</a>
        
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