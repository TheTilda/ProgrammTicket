<?php

session_start();
require_once __DIR__ . "/../../src/helper.php";
require_once __DIR__ . "/../../bd.php";


$name = $_POST['name'];
$type_event = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];
$organization = $_POST['organization'];
$count_places = $_POST['count-places'];
$price = $_POST['price'];


// Validation
// $_SESSION['validation']['name'] = 'Неверное имя' ;

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO posters (name, type, description, price, location, date, time, places, places_default, owner) VALUES (:name, :type, :description, :price, :location, :date, :time, :places, :places_default, :owner)";
$params = [
    "name" => $name,
     "type" => $type_event,
     "description" => $description,
     "price" => $price,
     "location" => $organization,
     "date"=> $date,
     "time"=> $time,
     "places" => $count_places,
     "places_default" => $count_places,
     "owner"=> $_SESSION['user']['id']
];


$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
    $_SESSION['warn']['admin']['status'] = 1;
    redirect('/admin/admin-page.php');
    // $stms -> commit();
} catch (\Exception $e) {
    die($e->getMessage());
}




?>