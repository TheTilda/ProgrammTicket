<?php
require_once __DIR__ . '/src/helper.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="index-style.css">

</head>
<body>
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
                <div class="nav-item link">
                    <a href="#">Мои билеты</a>
                </div>
            <?php endif; ?>

            <div class="nav-item">
                <a href="#"><img src="images/profile.gif" alt=""></a>
            </div>
        </div>
    </div>
    <div id="container">
        <h1>Афиша</h1>
        <div class="content">

            <div class="events">
                <div class="event">
                    <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                        25 ноября, 19:00 |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/">Филармония</a>
                    </span>
                    </span>

                </div>
            </div>
            <div class="events" onclick="location.href='#';">
                <div class="event">
                    <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                        25 ноября, 19:00 |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/">Филармония</a>
                    </span>
                    </span>

                </div>
            </div>
            <div class="events" onclick="location.href='#';">
                <div class="event">
                    <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                        25 ноября, 19:00 |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/">Филармония</a>
                    </span>
                    </span>

                </div>
            </div>
            <div class="events" onclick="location.href='#';">
                <div class="event">
                    <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                        25 ноября, 19:00 |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/">Филармония</a>
                    </span>
                    </span>

                </div>
            </div>
            <div class="events" onclick="location.href='#';">
                <div class="event">
                    <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                        25 ноября, 19:00 |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/">Филармония</a>
                    </span>
                    </span>

                </div>
            </div>
            <div class="events">

                <div class="event" onclick="location.href='#';">
                        <img src="images/events/bernarda.jpg" alt="">
                    <div class="event-header">
                        Дом Бернарды Альбы
                    </div>
                    <span class="event-cost">
                        от 250 руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                        <span class="date">
                            25 ноября, 19:00 |
                        </span>
                        <span class="event-location">
                            <a href="https://www.kemfil.ru/">Филармония</a>
                        </span>
                    </span>

                </div>

            </div>
        </div>
    </div>
</body>
</html>