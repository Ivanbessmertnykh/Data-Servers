<?php
$db = new PDO('mysql:host=db;dbname=site', 'ivan', 'ivan123321');

if (isset($_POST["name"]) && isset($_POST["price"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];

    $state = $db->prepare("INSERT INTO cars(`name`, price) VALUES(:name, :price)");
    $state->execute([
        ':name' => $name,
        ':price' => $price
    ]);
}

if (isset($_GET["itemId"]) && is_numeric($_GET["itemId"])) {
    $id = $_GET["itemId"];

    $state = $db->prepare("DELETE FROM cars WHERE id = :id");
    $state->execute([
        ':id' => $id,
    ]);
}

$row = $db->query("SELECT id, `name`, price FROM cars")->fetchAll(PDO::FETCH_ASSOC);
