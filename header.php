<?php
require_once __DIR__ . "/src/helper.php";

?>
<link rel="stylesheet" href="index-style.css">
<div class="header">
        <div class="header-logo">
            <img src="images/LOGO.svg" alt="">
        </div>
        <div class="header-search">
            <form action="">
                
                <input type="search" placeholder="  Найти интересное событие...">
            </form>
        </div>
        <div class="header-nav">

            <div class="nav-item link">
                <a href="#">Кемерово</a>
            </div>
            <?php if ($_SESSION['user']): ?>
                <?php if ($_SESSION['user']['level'] > 1):?>
                    <div class="nav-item link">
                    <a href="/admin/admin-page.php">Админ-панель</a>
                    </div>
                <?php endif; ?>
                <div class="nav-item link">
                    <a href="#">Мои билеты</a>
                </div>
                <div class="nav-item">
                    <a href="/profile.php"><img src="images/profiles/profile.gif" alt=""></a>
                </div>
                <?php else: ?>
                    <div class="nav-item">
                        <a href="/profile.php"><img src="images/profiles/default.jpg" alt=""></a>
                    </div>
            <?php endif; ?>

            

        </div>
    </div>