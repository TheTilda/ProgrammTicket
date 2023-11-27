<?php

session_start();


require_once __DIR__ . "/../../src/helper.php";
require_once __DIR__ . "/../../bd.php";
if ($_POST){

$name = $_POST['name'];
$type_event = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$description = $_POST['description'];
$organization = $_POST['organization'];
$count_places = $_POST['count-places'];
$price = $_POST['price'];


$uploaddir = __DIR__ . "/../../images/events/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$razreshenniye_simvoli = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$random_name = "event-photo-" . substr(str_shuffle($razreshenniye_simvoli), 0, 15) . ".jpg";


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    rename($uploaddir . $_FILES["userfile"]["name"], $uploaddir. $random_name);
    echo "Файл корректен и был успешно загружен.\n";
} else {
    $_SESSION['warn']['admin']['status'] = 'file';
    echo "Возможная атака с помощью файловой загрузки!\n";
}

// Validation
// $_SESSION['validation']['name'] = 'Неверное имя' ;

$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO posters (name, type, description, price, location, date, time, places, places_default, photo, owner) VALUES (:name, :type, :description, :price, :location, :date, :time, :places, :places_default, :photo, :owner)";
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
     "photo" => $random_name,
     "owner"=> $_SESSION['user']['id']
];


$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
    $_SESSION['warn']['admin']['status'] = 1;
    // redirect('/admin/admin-page.php');
    // $stms -> commit();
} catch (\Exception $e) {
    die($e->getMessage());
}


}
else{
    redirect('/');
}

?>