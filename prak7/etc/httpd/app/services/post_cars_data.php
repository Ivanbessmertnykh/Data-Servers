<?php
function post_cars_data() {
    $mysqli = new mysqli("db", "ivan", "ivan123321", "site");
    $entity = json_decode(file_get_contents('php://input'), true);
    
    $name = $entity["name"];
    $price = $entity["price"];
    
    $result = $mysqli->query("INSERT INTO cars(`name`, price) VALUES (" . "'$name', $price)");
    echo json_encode($entity);
}
