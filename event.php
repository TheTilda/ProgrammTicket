<?php

require_once __DIR__. "/bd.php";

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->prepare("SELECT * FROM `posters` WHERE `id` = :id");
$result->execute(array('id' => $_GET['id']));
$array = $result->fetch(PDO::FETCH_ASSOC);
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

<link rel="stylesheet" href="event-style.css">
<div class="container">
<!-- <img src="/images/events/<? echo $array['photo']?>" alt=""> -->
    <div class="event-main">
        <div class="event-image" style="background-image: url('/images/events/<? echo $array['photo']?>')"><span><h2>Варшавская мелодия собрание текстов и песен</h2></span></div>
        
        <span class="description"> 
            
            ”Варшавская мелодия”напомнила мне мою судьбу…»- написала одна из зрителей. И это очень здорово, что появился такой отклик. А что ещё надо для того, кто пришел посмотреть спектакль? «Любить по-настоящему и быть счастливым сегодня ничуть не проще, чем в средние века или 50 лет назад – вот ведь о чем идет речь и что вызывает живой отклик в зале». Но в пьесе, кроме темы любви присутствуют еще две темы, которые в спектакле «опущены»: это тема войны и тема взаимоотношений человека и государства (общества). 
        </span>
        <br>
        <button>Купить билет</button>
    </div>


</div>