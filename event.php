<?php

require_once __DIR__. "/bd.php";

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->prepare("SELECT * FROM `posters` WHERE `id` = :id");
$result->execute(array('id' => $_GET['id']));
$array = $result->fetch(PDO::FETCH_ASSOC);

$result_location = $pdo->prepare("SELECT * FROM `locations` WHERE `id` = :id");
$result_location->execute(array('id' => $array['location']));
$location = $result_location->fetch(PDO::FETCH_ASSOC);

$json = json_encode(unserialize($location['places']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="index-style.css">

    <script src="script.js"></script>
</head>
<body>
    <!-- Импортируем хедер -->
    <? require_once __DIR__ . '/header.php'?>

<link rel="stylesheet" href="event-style.css">
<div class="container">
<!-- <img src="/images/events/<? echo $array['photo']?>" alt=""> -->
    <div class="event-main">
        <div class="event-image" style="background-image: url('/images/events/<? echo $array['photo']?>')"><span><h2><? echo $array['name'] ?></h2></span></div>
        
        <span class="description"> 
            
            <? echo $array['description'] ?>
        </span>
        <br>

        <div id="places">

        </div>

        <button id="buy-btn">Купить билет</button>
    </div>
    <script>
        try{
            console.log("test");
            var places = JSON.parse('<?php echo $json; ?>');
            console.log(places);
            var rows = [];
            places.forEach(el => {
                if (rows.includes(el.split('p')[0])){
                    // console.log("в теге if " + el);
                }else{

                    // console.log("в теге else " + el);
                    console.log("row: " + rows);
                    rows.push(el.split('p')[0]);
                    
                    document.getElementById("places").innerHTML+='<div id="places-row' + el.split('p')[0] +'"> </div>';

        }});
            places.forEach(el => {
                console.log(el)
                if (el.split('p')[1] == '0'){
                    console.log('Элемент пустой');
                    document.getElementById("places-row" + el.split('p')[0] ).innerHTML+='<div  class="places-empty" id="' + el + '">'+ "</div>";

                }else{
                    document.getElementById("places-row" + el.split('p')[0] ).innerHTML+='<button class="places-btn" id="' + el + '">' + "</button>";
                }
                
            });
        }catch (err) {
                    console.log('Поймали ошибку! Вот она: ', err.message)
                }
        </script>

</div>