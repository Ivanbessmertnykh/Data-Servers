<?php

$request_method = $_SERVER['REQUEST_METHOD'];
$mysqli = new mysqli("db", "ivan", "ivan123321", "site");

if ($request_method == "GET") {
    if (!empty($_GET)) {
        $id = $_GET["id"];
        $result = $mysqli->query("SELECT `id`, `name`, price FROM cars where `id` = $id");
        foreach ($result as $item) {
            $car = array(
                "id" => $item["id"],
                "name" => $item["name"],
                "price" => $item["price"]
            );
            echo json_encode($car);
        }
    } else {
        $result = $mysqli->query("SELECT `id`, `name`, price FROM cars");
        $array = array();

        foreach ($result as $item) {
            $car = array(
                "id" => $item["id"],
                "name" => $item["name"],
                "price" => $item["price"]
            );
            array_push($array, $car);
        }
        echo json_encode($array);
    }

} elseif ($request_method == "POST") {
    $entity = json_decode(file_get_contents('php://input'), true);

    $name = $entity["name"];
    $price = $entity["price"];

    $result = $mysqli->query("INSERT INTO cars(`name`, price) VALUES (" . "'$name', $price)");
    echo json_encode($entity);

} elseif ($request_method == "PUT") {
    $entity = json_decode(file_get_contents('php://input'), true);

    $id = $entity["id"];
    $name = $entity["name"];
    $price = $entity["price"];

    $result = $mysqli->query("UPDATE cars SET `name` = '$name', price = $price where `id` = $id");
    echo json_encode($entity);

} elseif ($request_method == "DELETE") {
    $entity = json_decode(file_get_contents('php://input'), true);

    $id = $entity["id"];
    $result = $mysqli->query("DELETE FROM cars where `id` = $id");
    echo "OK";
}
