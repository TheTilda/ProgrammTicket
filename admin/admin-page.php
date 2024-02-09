<?php

require_once __DIR__ . '/../src/helper.php';
require_once __DIR__ .'/../bd.php';
$pdo = getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->query("SELECT name, id FROM `locations`");
$array_names_org = $result->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="index-style.css">
    <link rel="stylesheet" href="admin-style.css">
        <script>
            function chpok(id, id_button){
                elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
                btn = document.getElementById(id_button); //находим блок div по его id, который передали в функцию
                state = elem.style.display; //смотрим, включен ли сейчас элемент
                if (state == 'flex') {
                    elem.style.display='none';
                    btn.style.background='#FF6600';
                    btn.textContent = 'Создать мероприятие';

                } //если включен, то выключаем
                else {elem.style.display='flex'; btn.style.background='#ff660077';btn.textContent = 'Скрыть';}; //иначе - включаем
            }
        </script>
        <style>
            #burger-form{
                display: none;
            }
        </style>
                    <?php if($_SESSION['warn']['admin']['status'] == 1):?>
                        <? $_SESSION['warn']['admin']['status'] = null; ?>
                        <style>
                            .warn{
                                display: flex;
                                margin-bottom: 20px;
                                align-items: center;
                                margin: 0 auto;
                                margin-bottom: 20px;
                                width: 98%;
                                height: 30px;
                                border: 2px solid green;
                            }
                            .warn h3{
                                margin: 0 auto;
                            }
                        </style>
                    <?php else:?>
                        <style>
                            .warn{
                                display: none;
                            }
                        </style>
                    <?php endif;?>

</head>
<body>

        <div id="container">
            <div class="conatiner-head">
                <h1>Админ-панель</h1>
                <a href="/">На главную</a>
            </div>
            
            <div class="create-poster">
                <div class="warn">
                    <h3>Мероприятие успешно создано</h3>
                </div>
                
                <button id= "create-posters"onclick="chpok('burger-form', 'create-posters')">Создать мероприятие</button>
                
                <form id="burger-form" enctype="multipart/form-data" action="actions/create-poster.php" method="post">
                    <input type="file" name="userfile" id="file-input" required>
                    <input name="name"type="text" id="name" placeholder="Название мероприятия" required>

                    <select name="type" id="type_posters" required>
                        <option value="" disabled selected>Тип спектакля</option>
                        <option value="performance">Спектакль</option>
                        <option value="concert">Концерт</option>
                        <option value="fair">Ярмарка</option>    
                        <option value="disco">Дискотека</option>    
                    </select>

                        <input type="date" name="date" id="" placeholder="Дата" required>

                        <input type="time" name="time" id=""placeholder="Время" required>

                    <textarea name="description" rows="5" cols="60" placeholder="Описание" required>Описание</textarea>

                    <select name="organization" id="type_posters" required>
                        <option value="" disabled selected>Выберите площадку</option>
                        <?php foreach($array_names_org as $row):?>
                            <? echo '<option value="'. $row['id'] .'">' . $row['name'] . '</option>'?>

                        <?php endforeach; ?>
                    </select>
                    <input type="text" name="count-places" placeholder="Количество мест" required>
                    <input name="price" type="text" placeholder="Цена" required>
                    <button id="submit-button"type="submit">Создать</button>
                </form>
            </div>
        </div>
</body>
</html>
