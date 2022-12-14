<?php

require_once('../services/admin_service.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автосервис | Админ-панель</title>
</head>
<body>
<h1>Админ-панель</h1>
<h3>Добавить машину</h3>
<?php if (isset($_POST["name"]) && isset($_POST["price"])) echo "<p>Машина успешно добавлена</p>" ?>
<form name="add" method="post">
    <p>Название: <input type="text" name="name"/></p>
    <p>Цена: <input type="number" name="price"/></p>
    <input type="submit" value="Добавить">
</form>

<h3>Текущий список</h3>
<table>
    <tr>
        <th>Название</th>
        <th>Цена</th>
    </tr>
    <?php foreach ($row as $k => $v): ?>
        <tr>
            <td><?= $v["name"] ?></td>
            <td><?= $v["price"] ?> рублей</td>
            <td><button onclick="window.location.href='?itemId=<?= $v["id"] ?>';">Удалить</button></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
