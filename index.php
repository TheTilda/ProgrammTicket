<?php
require_once __DIR__ . '/src/helper.php';
require_once __DIR__ . '/bd.php';

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->query("SELECT * FROM `users`");

$array = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($array as $row) {
    echo($row['login']);
    echo('<br>');
}


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
    <!-- Импортируем хедер -->
    <? require_once __DIR__ . '/header.php'?>
    </div>
    <div id="container">
        <h1>Афиша</h1>
        <div class="content">

            <div class="events">
                <div class="event" onclick="location.href='#';" >
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
        </div>
    </div>
</body>
</html>