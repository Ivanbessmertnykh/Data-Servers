<?php require_once('../models/get_catalog_data.php'); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автосервис</title>
</head>
<body>
<h1>Каталог автосервиса</h1>
<table>
    <tr>
        <th>Название</th>
        <th>Цена</th>
    </tr>
    <?php foreach ($row as $k => $v): ?>
        <tr>
            <td><?= $v["name"] ?></td>
            <td><?= $v["price"] ?> рублей</td>
        </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="/">На главную</a><br>
<a href="contacts.html">Контакты</a>
</body>
</html>
