<?php

require_once __DIR__ . '/src/helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="header">
        
    </div>

    <?php if ($_SESSION['user']): ?>
        <div>
            Добрый день, <? echo $_SESSION['user']['login']?>
            <br>
            Ваш уровень админ-прав: <? echo $_SESSION['user']['level']?>
            <form action="src/actions/logout.php" method="post">
                <button type="submit">Выйти из аккаунта</button>
            </form>
            
        </div>
    <?php endif; ?>
    <?php if (!$_SESSION['user']): ?>
        <div>
        <a href="/login-user.php">Логин</a>
        <a href="/register.php">Регистрация</a>
        </div>
    <?php endif; ?>
</body>
</html>