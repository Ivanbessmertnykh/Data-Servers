<?php
function put_cars_data() {
    $mysqli = new mysqli("db", "ivan", "ivan123321", "site");
    $entity = json_decode(file_get_contents('php://input'), true);
    
    $id = $entity["id"];
    $name = $entity["name"];
    $price = $entity["price"];
    
    $result = $mysqli->query("UPDATE cars SET `name` = '$name', price = $price where `id` = $id");
    echo json_encode($entity);
}
