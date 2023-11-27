<?php

require_once __DIR__ ."/header.php";
require_once __DIR__. "/bd.php";

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->prepare("SELECT * FROM `posters` WHERE `id` = :id");
$result->execute(array('id' => $_GET['id']));
$array = $result->fetch(PDO::FETCH_ASSOC);
print_r($array['photo']);
?>

<div class="container">

    <div class="content">
        <? echo $_GET['id'];?>
    </div>

    <div>
        <img src="/images/events/<? echo $array['photo']?>" alt="">
    </div>
</div>