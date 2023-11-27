<?php
require_once __DIR__ . '/src/helper.php';
require_once __DIR__ . '/bd.php';

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->query("SELECT * FROM `posters`");

$array = $result->fetchAll(PDO::FETCH_ASSOC);

function num_to_month($month) {
    $months = array(
        'Январь'=> 1,
        'Февраль' => 2,
        'Март'=> 3,
        'Апрель'=> 4,   
        'Май'=> 5,
        'Июнь'=> 6,
        'Июль'=> 7,
        'Август'=> 8,
        'Сентябрь'=> 9,
        'Октябрь'=> 10,
        'Ноябрь'=> 11,
        'Декабрь'=> 12
    );
    return array_search($month, $months);
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
            <?php foreach($array as $row):?>
                <div class="events">
                <div class="event" onclick="location.href='/event.php?id=<?= $row['id']; ?>';" >
                    <img src="images/events/<?= $row['photo']; ?>" alt="">
                    <div class="event-header">
                        <?= $row['name']; ?>
                    </div>
                    <span class="event-cost">
                        от <?= $row['price']; ?>руб.
                    </span>
                    <span class="event-sale">
                        -15%
                    </span>
                    <span class="event-description">
                    <span class="date">
                    <?= explode('-', $row['date'])[2]; ?> <?= num_to_month(explode('-', $row['date'])[1]); ?>, <?= $row['time']; ?> |
                    </span>
                    <span class="event-location">
                        <a href="https://www.kemfil.ru/"><?= $row['organization']; ?></a>
                    </span>
                    </span>

                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</body>
</html>